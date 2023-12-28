<?php
session_start();
$price = 0;
if (isset($_POST['btn'])) {
    header('Location: http://localhost/museum-website/booking.php');
}
if (isset($_POST['homepage'])){
    header('Location: http://localhost/museum-website/index.php');

}
if (isset($_POST['tor'])){
    $tor = $_POST['tor'];
}
if (isset($_POST['arab'])){
$arab=$_POST['arab'];
}
if (isset($_POST['std'])){
    $std=$_POST['std'];
}
$_SESSION['count']= $arab + $std + $tor;
?>