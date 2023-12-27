<?php
$rigimessage = '';
if (isset($_POST['username']) && isset($_POST['password']) && $_POST['email']) {
    $username = $_POST['username'];
    $thepassword = $_POST['password'];
    $email = $_POST['email'];
    $host = 'localhost';
    $user = 'root';
    $password = "";
    $db = 'museumdb';
    $theConnection = mysqli_connect($host, $user, $password, $db);
    $abc = "INSERT INTO  USERS (USERNAME , pswd , email) VALUE ('$username','$thepassword','$email')";
    $stmt = mysqli_prepare($theConnection, $abc);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        $rigimessage = "
        <script>
        alert('added correctly');
        </script>";
        header("Location: http://localhost/museum-website/login.php");
    }else { 
        $rigimessage = "
        <script>
        alert('added correctly');
        </script>";
    }

}
?>