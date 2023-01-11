<?php


header("Content-Type: application/json");

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

$client = new Client();


require("general.php");
if(!empty($_POST)){
    $transferResponse = $client->request('POST', 'https://www.yrgopelago.se/centralbank/transferCode', [
        'form_params' => [
            'transferCode' => $_POST['transfer-code'],
            'totalCost' => $_POST['price'],
        ],
    ]);
    
    $amount = (json_decode($transferResponse->getBody())->amount);

    if ($amount >= $_POST['price']) {
        $selectedDates = explode(",", $_POST["selected-dates"]);
        sort($selectedDates);
        
        foreach ($selectedDates as $key => $selectedDate) {
            
            if ($selectedDate != ($selectedDates[$key-1] + 1) || $key == 0) {
                $arrivalDates[] = $selectedDates[$key];
            }
        }
        
        rsort($selectedDates);

        foreach ($selectedDates as $key => $selectedDate) {
            if ($selectedDate != ($selectedDates[$key-1] - 1)) {
                $departureDates[] = $selectedDates[$key];
            }
        }

        sort($departureDates);
        
        

        foreach ($arrivalDates as $key => $arrivalDate) {
            if ($key == 0) {
                $price = $_POST['price'];
                foreach ($_POST['features'] as $featureKey => $feature) {
                    $features[$featureKey]['name'] = explode(",", $feature)[0];
                    $features[$featureKey]['cost'] = explode(",", $feature)[1];
                }

            }else {
                $price = null;
                $features = null;
            }
            
            
            $response[] = [
                "island" => "Eldoon Isle",
                "hotel" => "Itsakon Hotel",
                "arrival_date" => $arrivalDate,
                "departure_date" => $departureDates[$key],
                "total_cost" => $price,
                "stars" => $stars,
                "features" => $features,
                "addtional_info" => "Thanks for staying at Itsakon Hotel",
            ];
        }

        $client->request('POST', 'https://www.yrgopelago.se/centralbank/deposit', [
            'form_params' => [
                'user' => 'Niklas',
                'transferCode' => $_POST['transfer-code'], 
            ],
        ]);
        switch ($_POST['room-type']) {
            case 'budget':
                $roomId = 1;
                break;
            case 'standard':
                $roomId = 2;
                break;
            case 'luxury':
                $roomId = 3;
                break;
        }

        foreach ($selectedDates as $dayOfMonth) {
            $saveBooking = $database->prepare("INSERT INTO bookings (room_id, day_of_month) VALUES (?, ?)")->execute([$roomId, $dayOfMonth]);
        }
        

    }else {
        $response = "Not enough money in the Transfer Code";
    }
}

echo json_encode($response);
