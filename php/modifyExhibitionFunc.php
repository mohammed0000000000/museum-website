<?php 
$message = '';
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
    $modifyExhibition = "UPDATE exhibitions SET NAME = '$name', INFO = '$info', exhibiDATE = '$date' where ID = '$ID'";
    $stmt = mysqli_prepare($theConnection, $modifyExhibition); 
    mysqli_stmt_execute($stmt);
    if(mysqli_stmt_affected_rows($stmt) == 0){
        $message = '<script> alert("incorrect ID or values unchanged");</script>'; 
    }else{
        $message = '<script> alert("Exhibition Updated Successfully");</script>'; 
    }
}   
?>