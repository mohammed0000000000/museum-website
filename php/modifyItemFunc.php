<?php
$modmessage= '';

if (isset($_POST['ModifyItemID'])) {
    $name = (isset($_POST['ModifyItemName'])) ? $_POST['ModifyItemName'] : '';
    $info = (isset($_POST['ModifyItemInfo'])) ? $_POST['ModifyItemInfo'] : '';
    $imagePaht = (isset($_POST['ModifyImagePath'])) ? $_POST['ModifyImagePath'] : '';
    $ID = $_POST['ModifyItemID'];
    $host = 'localhost';
    $user = 'root';
    $password = "";
    $db = 'museumdb';
    $theConnection = mysqli_connect($host, $user, $password, $db);
    if ($name) {
        $modifyitem = "
        UPDATE gallery SET NAME = '$name'  where ID = $ID";
        $stmt = mysqli_prepare($theConnection, $modifyitem);
        mysqli_stmt_execute($stmt);
        if (mysqli_stmt_affected_rows($stmt) == 0) {
            $modmessage = '<script type="text/javascript">
        alert("Id not found");
        </script>
        ';
        }else {
            $modmessage = '<script type="text/javascript">
            alert("Item modifyed successfully");</script>';
        }
    }
    if ($info) {
        $modifyitem = "
        UPDATE gallery SET info = '$info'  where ID = $ID";
        $stmt = mysqli_prepare($theConnection, $modifyitem);
        mysqli_stmt_execute($stmt);
        if (mysqli_stmt_affected_rows($stmt) == 0) {
            $modmessage = '<script type="text/javascript">
        alert("Id not found ");
        </script>
        ';
        }else {
            $modmessage = '<script type="text/javascript">
            alert("Item modifyed successfully");</script>';
        }
    }
    if ($imagePaht) {
        $modifyitem = "UPDATE gallery SET src = '$imagePaht'  where ID = $ID"; 
          $stmt = mysqli_prepare($theConnection, $modifyitem);
        mysqli_stmt_execute($stmt);
        if (mysqli_stmt_affected_rows($stmt) == 0) {
            $modmessage = '<script type="text/javascript">
        alert("Id not found");
        </script>
        ';
        }else {
            $modmessage = '<script type="text/javascript">
            alert("Item modifyed successfully");</script>';
        }        
    }   
}
?>