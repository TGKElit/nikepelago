
            <input type="hidden" name="price" id="form-price" value="0">
            <input type="hidden" name="selected-dates" id="selected-dates" value="">
            <section class="features">
                <h4>Features</h4>
                <div></div>
                <?php
                for ($i=0; $i < 28; $i++) { 
                    ?>
                    <div class="feature">
                        <input type="checkbox" name="feature<?=$i?>">
                        <label for="feature<?=$i?>">A feature! $2</label>
                    </div>
                    <?php
                }
                ?>
            </section>
            <section class="complete-purchace">
                <input type="text" name="transfer-code">
                <label for="transfer-code">Transfer code</label>
                <input type="text" name="name">
                <label for="name">Name</label>
                <button type="submit" id="confirm-button">Confirm Purchase</button>
                <div class="price"><p>Total: $</p><p id="display-price">0</p></div>
            </section>
        </form>
        <script src="roomPageVariables.js"></script>
        <script src="main.js"></script>
    </div>
    </body>
</html>