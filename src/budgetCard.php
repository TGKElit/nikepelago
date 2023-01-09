<article class=room id="budget">
                    <h3>Budget</h3>
                    <section class="carousell">
                        <button class="scroll-button left" id="budget-left" type="button">
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
                    <div class="book-info">
                        <a href="./budget.php">Book Now</a>
                        <section class="info">
                            <h4>$4/day</h4>
                            <p>5% discount per 3 days booked!</p>
                        </section>
                    </div>
                    <section class="calendar-section">
                        <h4>Availability</h4>
                        <div class="calendar">
                            <h5>January 2023</h5>
                            <div class="calendar-body">
                                <?php
                                for ($i=0; $i < 7; $i++) { 
                                    ?>
                                    <div class="calendar-element day-of-week"><?= $daySymbol[$i]?></div>
                                    <?php
                                }
                                for ($i=0; $i < 6; $i++) {
                                    ?>
                                    <div class="calendar-element out-of-month"></div>
                                    <?php
                                }
                                for ($i=1; $i <= 31; $i++) {
                                    ?>
                                    <div class="calendar-element day-of-month" id="budget<?=$i?>"><?= $i?></div>
                                    <?php
                                }
                                for ($i=0; $i < 5; $i++) {
                                    ?>
                                    <div class="calendar-element out-of-month"></div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </section>
                </article>