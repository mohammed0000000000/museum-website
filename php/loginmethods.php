<?php
$loginmessage = '';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $thepassword = $_POST['password'];
    $host = 'localhost';
    $user = 'root';
    $password = "";
    $db = 'museumdb';
    $theConnection = mysqli_connect($host, $user, $password, $db);
    $abc = "SELECT USERNAME , pswd , isadmin FROM USERS WHERE USERNAME = '$username' and pswd = '$thepassword'";
    $stmt = mysqli_prepare($theConnection, $abc);
    mysqli_stmt_execute($stmt);
    $therow= mysqli_fetch_row(mysqli_stmt_get_result($stmt));
    $access= $therow[2];
    if ($therow == null) {
        $loginmessage = "
        <script>
        alert('there is no user with this data');
        </script>";
    } else if ($access==true){
        header("Location: http://localhost/museum-website/admin.php");
    }else if (!$access){ 
        header("Location: http://localhost/museum-website/index.php");
    }

}
?>