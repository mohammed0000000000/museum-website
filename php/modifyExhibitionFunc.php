<?php
session_start();

function modifyExhibition(){
    if (isset($_POST['ModifyExhibitionID'])) {
        $name = (isset($_POST['ModifyExhibitionName'])) ? $_POST['ModifyExhibitionName'] :'';
        $info = (isset($_POST['ModifyExhibitionInfo'])) ? $_POST['ModifyExhibitionInfo'] :'';
        $date = (isset($_POST['ModifyExhibitionDate'])) ? $_POST['ModifyExhibitionDate'] :'';
        $ID = $_POST['ModifyExhibitionID'];
        $host = 'localhost';
        $user = 'root';
        $password = "";
        $db = 'museumdb';
        $theConnection = mysqli_connect($host, $user, $password, $db);
        if ($name) {
            $modifyExhibition = "UPDATE exhibitions SET NAME = '$name'  where ID = $ID";
            $stmt = mysqli_prepare($theConnection, $modifyExhibition);
            mysqli_stmt_execute($stmt);
            if (mysqli_stmt_affected_rows($stmt) == 0) {
                $_SESSION['ModifyEx'] = '<script type="text/javascript"> alert("Id not found ");</script>';
            } else {
                $_SESSION['ModifyEx'] = '<script type="text/javascript"> alert("Exhibition modified successfully");</script>';
            }
        }
        if ($info) {
            $modifyExhibition = "UPDATE exhibitions SET info = '$info'  where ID = $ID";
            $stmt = mysqli_prepare($theConnection, $modifyExhibition);
            mysqli_stmt_execute($stmt);
            if (mysqli_stmt_affected_rows($stmt) == 0) {
                $_SESSION['ModifyEx'] = '<script type="text/javascript"> alert("Id not found ");</script>';
            } else {
                $_SESSION['ModifyEx'] = '<script type="text/javascript"> alert("Exhibition modified successfully");</script>';
            }
        }
        if ($date) {
            $modifyExhibition = "UPDATE exhibitions SET exhibiDATE = '$date'  where ID = $ID";
            $stmt = mysqli_prepare($theConnection, $modifyExhibition);
            mysqli_stmt_execute($stmt);
            if (mysqli_stmt_affected_rows($stmt) == 0) {
                $_SESSION['ModifyEx'] = '<script type="text/javascript"> alert("Id not found ");</script>';
            } else {
                $_SESSION['ModifyEx'] = '<script type="text/javascript"> alert("Exhibition modified successfully");</script>';
            }
        }
    }
}

modifyExhibition();
header('Location: http://localhost/museum-website/admin.php');
exit();

?>