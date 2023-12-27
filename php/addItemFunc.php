<?php
session_start();

function addItem()
{
    if (isset($_POST['AddItemName'])) {
        $name = $_POST['AddItemName'];
        $info = $_POST['AddItemInfo'];
        $src = $_POST['AddImagePath'];
        $host = 'localhost';
        $user = 'root';
        $password = "";
        $db = 'museumdb';
        $theConnection = mysqli_connect($host, $user, $password, $db);
        $AddItem = "INSERT INTO gallery (name, info, src) VALUES ('$name', '$info', '$src');";

        $stmt = mysqli_prepare($theConnection, $AddItem);
        mysqli_stmt_execute($stmt);
        if (mysqli_stmt_affected_rows($stmt) == 0) {
            $_SESSION['addmessage'] = "<script type='text/javascript'>
                alert('Some things went wrong. Please try again.');
            </script>";
        } else {
            $_SESSION['addmessage'] = "<script type='text/javascript'>
                alert('Item added successfully.');
            </script>";
        }
    }
}

addItem();
header('Location: http://localhost/museum-website/admin.php');
exit();

?>