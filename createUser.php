<?php
include 'includes/header.php';
include 'includes/footer.php';
include 'functions.php';
createUser();
?>

    <div class="container">
        <div class="col-sm-6">
            <h4 class="text-center">Create User</h4>
            <form action="createUser.php" method="post" name="form">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Create" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
