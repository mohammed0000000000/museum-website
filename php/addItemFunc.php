<?php 
if (isset($_POST['AddItemName'])){
    $name = $_POST['AddItemName'];
    $info = $_POST['AddItemInfo'];
    $src = $_POST['AddImagePath'];
        $host = 'localhost';
        $user = 'root';
        $password = "";
        $db = 'museumdb';
        $theConnection = mysqli_connect($host, $user, $password, $db);
        $gallaryPhotos = mysqli_query($theConnection, "
        insert into gallery (name,info,src)
        values('$name','$info','$src')");
}

?>