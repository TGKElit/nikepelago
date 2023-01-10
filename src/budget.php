    <?php
    require("room.php");?>
    <div class="columns">
        <?php
        roomCard("budget");
        ?>
        <form action="./booking.php" method="POST">
            <input type="hidden" name="room-type" value="budget">
            <?php
            require("roomForm.php");
            ?>
        