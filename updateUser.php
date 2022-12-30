<?php
include 'includes/header.php';
include 'includes/footer.php';
include 'functions.php';
updateUser();
?>

    <div class="container">
        <div class="col-sm-6">
            <h4 class="text-center">Update User</h4>
            <form action="updateUser.php" method="post" name="form">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div>
                    <select name="id" id="">
                        <?php userID(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
