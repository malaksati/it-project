<?php include_once("inc/navbar.php"); ?>
    <section class="booking py-3">
        <div class="container bg-secondry py-3">
            <div class="container bg-light d-flex justify-content-center w-100 reg-form">
                <form action="handlers/bookingHandler.php" method="post" class="d-flex info-reg">
                    <div class="w-100 py-3 px-5 d-flex flex-column gap-3">
                        <h2 class="py-4">Book Now</h2>
                        <div class="d-flex gap-4">
                            <input type="text" name="fname" placeholder="First Name: *" class="w-100 p-2 border">
                            <input type="text" name="lname" placeholder="Last Name: *" class="w-100 p-2 border">
                        </div>
                        <div>
                            <input type="text" name="ssn" placeholder="SSN: *" class="w-100 p-2 border">
                        </div>
                        <div class="d-flex gap-4">
                            <input type="email" name="email" placeholder="Email: *" class="w-100 p-2 border">
                            <input type="text" name="phone" placeholder="Phone: *" class="w-100 p-2 border">
                        </div>
                        <div class="d-flex gap-4">
                            <div class="w-100">
                                <label for="ch-in">Check In: *</label> <br>
                                <input id="ch-in" type="date" name="checkIn" class="w-100 p-2 border">
                            </div>
                            <div class="w-100">
                                <label for="ch-out">Check Out: *</label> <br>
                                <input id="ch-out" type="date" name="checkOut" class="w-100 p-2 border">
                            </div>
                        </div>
                        <hr>
                        <div>
                            <button type="submit" name="submit" class="w-100 p-2 border btn-dark">Submit</button>
                        </div>
                    </div>
                    <div class="w-100 py-3 px-5">
                        <h2 class="py-4">Choose Payment</h2>
                        <hr>
                        <div class="d-flex gap-3">
                            <div><input type="radio" name="pay" value="credit"></div>
                            <div>
                                <label for="">Pay via credit cart</label>
                                <p class="text-secondary">(MasterCard, Maestro, Visa, Visa Electron, JCB and American
                                    Express)</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <div><input type="radio" name="pay" value="paypal"></div>
                            <div>
                                <label for="">PayPal</label>
                                <p class="text-secondary">Purchase with your fingertips. Look for us the next time
                                    you're
                                    paying from a mobile app, and checkout faster on thousands of mobile websites.</p>
                            </div>
                        </div>
                </form>
            </div>
            </form>
        </div>
        </div>
    </section>
<?php include_once("inc/footer.php"); ?>