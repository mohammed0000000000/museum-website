<?php 
if (isset($_POST['ModifyExhibitionID'])){
    $name = $_POST['ModifyExhibitionName'];
    $info = $_POST['ModifyExhibitionInfo'];
    $date = $_POST['ModifyExhibitionDate'];
    $ID = $_POST['ModifyExhibitionID'];
        $host = 'localhost';
        $user = 'root';
        $password = "";
        $db = 'museumdb';
        $theConnection = mysqli_connect($host, $user, $password, $db);
        $modifyExhibition = mysqli_query($theConnection, "
        UPDATE exhibitions SET NAME = '$name', INFO = '$info', exhibiDATE = '$date' where ID = '$ID'");
}   
?>