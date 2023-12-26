<?php 
if (isset($_POST['AddExhibitionName'])){
    $name = $_POST['AddExhibitionName'];
    $info = $_POST['AddExhibitionInfo'];
    $date = $_POST['AddExhibitionDate'];
        $host = 'localhost';
        $user = 'root';
        $password = "";
        $db = 'museumdb';
        $theConnection = mysqli_connect($host, $user, $password, $db);
        $exhibition = mysqli_query($theConnection, "
        insert into exhibitions (NAME,INFO,exhibiDATE)
        values('$name','$info','$date')");
}
?>