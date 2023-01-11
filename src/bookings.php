<?php

//print_r($_POST);

header("Content-Type: application/json");
require("general.php");
if(!empty($_POST)){
    if (true /*TODO: Control transfercode n name*/) {
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
    }
}

echo json_encode($response);
