<?php
session_start();

function register()
{
    if (isset($_POST['username']) && isset($_POST['password']) && $_POST['email']) {
        $username = $_POST['username'];
        $thepassword = $_POST['password'];
        $email = $_POST['email'];
        $host = 'localhost';
        $user = 'root';
        $password = "";
        $db = 'museumdb';
        $theConnection = mysqli_connect($host, $user, $password, $db);

        $checkQuery = "SELECT COUNT(*) FROM USERS WHERE USERNAME = ?";
        $stmt = mysqli_prepare($theConnection, $checkQuery);
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $count);
        mysqli_stmt_fetch($stmt);

        if ($count > 0) {
            $_SESSION['RegiMsg'] = "
                <script>
                alert('Username already exists');
                </script>";
            header("Location: http://localhost/museum-website/risgster.php");
            exit();
        } else {
            mysqli_stmt_close($stmt);
            $abc = "INSERT INTO  USERS (USERNAME , pswd , email) VALUE ('$username','$thepassword','$email')";
            $stmt2 = mysqli_prepare($theConnection, $abc);
            $result = mysqli_stmt_execute($stmt2);
            $_SESSION['RegiMsg'] = "
            <script>
            alert('Registered Successfully');
            </script>";
            header("Location: http://localhost/museum-website/login.php");
            exit();
        }
    }
}

register();
?>