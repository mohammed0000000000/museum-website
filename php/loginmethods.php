<?php
session_start();

function Login()
{
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
        $therow = mysqli_fetch_row(mysqli_stmt_get_result($stmt));
        if ($therow == null) {
            $_SESSION['LoginMsg'] = "
            <script>
            alert('there is no user with this data');
            </script>";
            header("Location: http://localhost/museum-website/login.php");
            exit();
        } else {
            $_SESSION['logged'] = true;
            $access = $therow[2];
            if ($access == true) {
                $_SESSION['adminAccess'] = true;
                header("Location: http://localhost/museum-website/admin.php");
                exit();
            } else if (!$access) {
                $_SESSION['adminAccess'] = false;
                header("Location: http://localhost/museum-website/index1.php");
                exit();
            }
        }
    }
}

Login();

?>