<?php
$addmessage='';
if (isset($_POST['AddItemName'])) {
    $name = $_POST['AddItemName'];
    $info = $_POST['AddItemInfo'];
    $src = $_POST['AddImagePath'];
    $host = 'localhost';
    $user = 'root';
    $password = "";
    $db = 'museumdb';
    $theConnection = mysqli_connect($host, $user, $password, $db);
    $AddItem ="insert into gallery (name,info,src) values('$name','$info','$src');";

    $stmt = mysqli_prepare($theConnection,$AddItem);
    mysqli_stmt_execute($stmt);
    if (mysqli_stmt_affected_rows($stmt) == 0) {
        $addmessage = '<script type="text/javascript">
    alert("some things went wrong try again");
    </script>
    ';
    } else {
        $addmessage = '<script type="text/javascript">
    alert("item added successfully");
    </script>
    ';
    }
}

?>