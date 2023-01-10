<?php
    require('general.php');
    require('roomCard.php');
?>

<!DOCTYPE html>
<html lang ="eng">
    <head>
        <link rel="stylesheet" href="general.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="hero.css">
        <link rel="stylesheet" href="roomCard.css">
        <title>Itsakon Hotel</title>
    </head>
    <body>
        <?php require('header.php')?>

        <section class="hero">
            <img src="../resources/images/hero.png" alt="View of the Island">
        </section>
        <section class="rooms">
            <h2>Our Rooms</h2>
            <div class="room-container">
                <?php roomCard("budget", $daySymbol)?>
                <?php roomCard("standard", $daySymbol)?>
                <?php roomCard("luxury", $daySymbol)?>
            </div>
        </section>
        <script src="homePageVariables.js"></script>
        <script src="main.js"></script>
    </body>
</html>