<?php
    require("room.php");?>
    <div class="columns">
        <?php
        roomCard("standard");
        ?>
        <form action="./bookings.php" method="POST">
            <input type="hidden" name="room-type" value="standard">
            <?php
            require("roomForm.php");
            ?>
        