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

function readUser() {
    global $connect;
    $query = "SELECT * from users ";
    $result = mysqli_query($connect, $query);
    if(!$result) {
        die("Connection Faild".mysqli_error($connect));
    }
    while($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}


function updateUser() {
    global $connect;

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $hashForm = "$2y$10$";
        $salt = "iusesomecrazystringhere";
        $hash_salt = $hashForm . $salt ;
        $password = crypt($password, $hash_salt);

        $query = "UPDATE users SET ";
        $query .= "username = '$username',";
        $query .= "password = '$password'";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connect, $query);
    if(!$result) {
        die("Connection Faild". mysqli_error($connect));
    } else {
        echo "Record Updated";
    }

    }
}

function userID(){
    global $connect;
    $query = "SELECT * from users ";
    $result = mysqli_query($connect, $query);
    if(!$result) {
        die("Connection Faild".mysqli_error($connect));
    }
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function deleteUser(){
    global $connect;

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE from users ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connect, $query);
        if(!$result){
            die("Query Faild".mysqli_error($connect));
        } else {
            echo "Record deleted Successfully";
        }
    }
}
?>