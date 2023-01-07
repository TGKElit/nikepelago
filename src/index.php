<?php
    require('general.php');
?>

<!DOCTYPE html>
<html lang ="eng">
    <head>
        <link rel="stylesheet" href="general.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="hero.css">
        <link rel="stylesheet" href="rooms.css">
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
                <article class=room id="budget"></article>
                <article class=room id="standard"></article>
                <article class=room id="luxury"></article>
            </div>
        </section>

        <script src="main.js"></script>
    </body>
</html>