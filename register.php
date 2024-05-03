<?php include_once('inc/navbar.php'); ?>
<div class="container col-md-7 mb-5" style="margin-top: 15vh;">
    <h1 class="m-3 text-primary text-center mb-4">Register Page</h1>
    <form action="handlers/registerHandler.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" name="username" />
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" />
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" />
        </div>
        <div class="mb-3">
            <button type="submit" name="add-btn" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>
<?php include_once('inc/footer.php'); ?>