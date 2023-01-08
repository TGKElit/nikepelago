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
                <article class=room id="budget">
                    <h3>Budget</h3>
                    <section class="carousell">
                        <button class="scroll-button left" type="button">
                            <img src="../resources/svg/left-arrow.svg" alt="Previous image">
                        </button>
                        <div class="images">
                            <div class="image-container" id="budget-scroller">
                                <img src="../resources/images/budget-one.jpg" alt="First">
                                <img src="../resources/images/budget-two.jpg" alt="Second">
                                <img src="../resources/images/budget-three.jpg" alt="Last">
                            </div>
                        </div>
                        <button class="scroll-button right" id="budget-right" type="button">
                            <img src="../resources/svg/right-arrow.svg" alt="Next image">
                        </button>
                    </section>
                    <a href="./room/budget.php">Book Now</a>
                    <h4>$4/day</h4>
                    <p>5% discount per 3 days booked!</p>
                    <section class="calendar-section">
                        <h4>Availability</h4>
                        <div class="calendar">
                            <h5>January 2023</h5>
                            <div class="days"></div>
                        </div>
                    </section>
                </article>
                <article class=room id="standard"></article>
                <article class=room id="luxury"></article>
            </div>
        </section>

        <script src="main.js"></script>
    </body>
</html>