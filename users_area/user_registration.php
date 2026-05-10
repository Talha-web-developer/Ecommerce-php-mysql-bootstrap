<?php

include('../includes/connect.php');
include('../includes/header.php');
include('../includes/navbar.php');

?>

<div class="container my-5">
    <div class="card p-4 mx-auto registration-card">
        <h2 class="text-center mb-4 text-custom-maroon">Create New Account</h2>
        <form action="#" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="user_username" class="form-label">Username</label>
                <input type="text" class="form-control" id="user_username" name="user_username"
                    placeholder="Enter Username" required>
            </div>

            <div class="mb-3">
                <label for="user_email" class="form-label">Email</label>
                <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Enter Email"
                    required>
            </div>

            <div class="mb-3">
                <label for="user_image" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="user_image" name="user_image" required>
            </div>

            <div class="mb-3">
                <label for="user_password" class="form-label">Password</label>
                <input type="password" class="form-control" id="user_password" name="user_password"
                    placeholder="Create password" required>
            </div>

            <div class="mb-3">
                <label for="conf_user_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="conf_user_password" name="conf_user_password"
                    placeholder="Confirm password" required>
            </div>

            <div class="mb-3">
                <label for="user_address" class="form-label">Address</label>
                <input type="text" class="form-control" id="user_address" name="user_address"
                    placeholder="Enter Address" required>
            </div>

            <div class="mb-3">
                <label for="user_contact" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" id="user_contact" name="user_contact"
                    placeholder="10 digit mobile number" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-custom py-2" name="user_register">Register</button>
            </div>
            <p class="text-center mt-3">Alredy have an account? <a href="user_login.php"
                    class="text-custom-maroon fw-bold">Login</a></p>
        </form>
    </div>
</div>


<?php include('../includes/footer.php'); ?>
</body>

</html>