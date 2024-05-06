<?php include_once("inc/navbar.php"); ?>

    <section class="contact py-3">
        <div class="container">
            <h1 class="text-center my-5">CONTACT US</h1>
            <div class="form-message w-75 m-auto p-5 text-center mt-3">
                <h2>Send a Message</h2>
                <p class="w-75 m-auto py-3">Please use this form if you have any questions about our products
                    and we'll get back with you very soon.</p>
                <form action="handlers/contactHandler.php" method="post">
                    <div class="name-email py-3 d-flex justify-content-center align-items-center gap-5">
                        <input type="text" name="name" placeholder="Your Name" class="w-100 border p-3">
                        <input type="email" name="email" placeholder="Your Email" class="w-100 border p-3">
                    </div>
                    <div class="py-3">
                        <input type="text" name="subject" placeholder="Subject" class="w-100 border p-3">
                    </div>
                    <div class="py-3">
                        <textarea class="w-100 p-3" name="message" placeholder="Your Message"></textarea>
                    </div>
                    <div>
                        <button type="submit" name="submit" class="w-100 p-2 border btn-dark">Submit</button>
                    </div>
                </form>
            </div>
            <div class="info w-75 m-auto text-center p-5 bg-light d-flex gap-5 justify-content-between align-items-center">
                <div class="box">
                    <div class="mb-3 text-center">
                        <i class="fa fa-3x fas fa-clock"></i>
                    </div>
                    <div class="text-info">
                        <h4>Working Hours</h4>
                        <p><strong>Mon - Sat</strong>: 10 am - 6 pm</p>
                        <p><strong>Sun</strong> 12pm - 2 pm</p>
                    </div>
                </div>
                <div class="box">
                    <div class="mb-3 text-center">
                        <i class="fa fa-3x fas fa-location-dot"></i>
                    </div>
                    <div class="text-info">
                        <h4>Where Are We?</h4>
                        <p>200 12th Ave, New York, <br>
                            NY 10001, USA</p>
                    </div>
                </div>
                <div class="box">
                    <div class="mb-3 text-center">
                        <i class="fa fa-3x fas fa-phone-volume"></i>
                    </div>
                    <div class="text-info">
                        <h4>Call Us</h4>
                        <p><strong>T</strong> +1 222 333 4444</p>
                        <p><strong>F</strong> +1 222 333 5555</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include_once("inc/footer.php") ?>