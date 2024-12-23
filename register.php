<?php
include 'connect.php';

if (isset($_POST['signup'])) {
    $firstname = $_POST['fName'];
    $lastname = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password); //encrypt password

    $checkEmail = "Select * from users where email='$email'";
    $results = $conn->query($checkEmail);
    if ($results->num_rows > 0) {
        echo 'Email address already exists';
    } else {
        $insertQuery = "INSERT INTO users(firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$password')";
        if ($conn->query($insertQuery) == TRUE) {
            header("location:homepage.php");
        } else {
            echo 'Error:' . $conn->error;
        }
    }
}
if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password); //encrypt password

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();//fetch a row and pass it to the homepage
        $_SESSION['email']=$row['email'];
        header("Location:homepage.php");
        exit();

    }
    else{
        echo 'Invalid email or password';
    }


}
?>