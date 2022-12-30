<?php
include 'db.php';

function createUser() {
    global $connect;

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //hashing password
        $hashForm = "$2y$10$";
        $salt = "iusesomecrazystringhere";
        $hash_salt = $hashForm . $salt ;
        $password = crypt($password, $hash_salt);

        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES('$username', '$password')";

        $result = mysqli_query($connect, $query);
        if(!$result){
            die("Connection Faild".mysqli_error($connect));
        }else{
            echo "<h4>The User Created successfully</h4>";
        }
    }
}


?>