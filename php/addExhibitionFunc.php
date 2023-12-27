<?php
session_start();

function addExhibition()
{
    if (isset($_POST['AddExhibitionName'])) {
        $name = $_POST['AddExhibitionName'];
        $info = $_POST['AddExhibitionInfo'];
        $date = $_POST['AddExhibitionDate'];
        $host = 'localhost';
        $user = 'root';
        $password = "";
        $db = 'museumdb';
        $theConnection = mysqli_connect($host, $user, $password, $db);
        $exhibition ="insert into exhibitions (NAME,INFO,exhibiDATE) values('$name','$info','$date')";
        $stmt = mysqli_prepare($theConnection,$exhibition);
        mysqli_stmt_execute($stmt);
        if (mysqli_stmt_affected_rows($stmt) == 0) {
            $_SESSION['addExmessage'] = "<script type='text/javascript'>
                alert('Something went wrong. Please try again.');
            </script>";
        } else {
            $_SESSION['addExmessage'] = "<script type='text/javascript'>
                alert('Exhibition added successfully.');
            </script>";
        }
    }

}

addExhibition();
header('Location: http://localhost/museum-website/admin.php');
exit();

?>