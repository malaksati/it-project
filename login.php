<?php include_once('inc/navbar.php'); ?>

<div class="container col-md-7 mb-5" style="height:65vh; margin-top:15vh;">
    <h1 class="m-3 text-primary text-center mb-4">Welcome To Our Login Page</h1>
    <form action="handlers/loginHandler.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" />
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" />
        </div>
        <div class="mb-3">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
    </form>
    <p class="text-secondary m-auto w-75 fs-5">You don't have an account? <a class="fs-5 text-primary" href="register.php">register now!</a></p>
</div>

<?php include_once('inc/footer.php'); ?>