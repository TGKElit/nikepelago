<?php
    require("room.php");?>
    <div class="columns">
        <?php
        roomCard("luxury");
        ?>
        <form action="./bookings.php" method="POST">
            <input type="hidden" name="room-type" value="luxury">
            <?php
            require("roomForm.php");
            ?>
        