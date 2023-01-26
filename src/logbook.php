<?php
require('general.php');
require('roomCard.php');
?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="logbook.css">
</head>

<body>
    <?php
    require("header.php");
    ?>

    <section class="logbook">
        <h2 class="section-title">Visited hotels</h3>
            <img src="../resources/images/hero.png" alt="View of the Island">
            <div class="card-wrapper"></div>
    </section>
    <script src="logbook.js"></script>

</body>

</html>