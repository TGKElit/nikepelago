<?php
    require("room.php");?>
    <div class="columns">
        <?php
        roomCard("standard");
        ?>
        <form action="./booking.php" method="POST">
            <input type="hidden" name="room-type" value="standard">
            <?php
            require("roomForm.php");
            ?>
        