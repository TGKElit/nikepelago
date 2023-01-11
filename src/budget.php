    <?php
    require("room.php");?>
    <div class="columns">
        <?php
        roomCard("budget");
        ?>
        <form action="./bookings.php" method="POST">
            <input type="hidden" name="room-type" value="budget">
            <?php
            require("roomForm.php");
            ?>
        