<?php
session_start();

function deleteItem()
{
    if (isset($_POST['DeleteItemID'])) {
        $host = 'localhost';
        $user = 'root';
        $password = "";
        $db = 'museumdb';
        $theConnection = mysqli_connect($host, $user, $password, $db);
        $deleteid = $_POST["DeleteItemID"];
        $deleting = "DELETE FROM gallery WHERE id=$deleteid";
        $stmt = mysqli_prepare($theConnection, $deleting);
        mysqli_stmt_execute($stmt);
        if (mysqli_stmt_affected_rows($stmt) == 0) {
            $_SESSION['deletemessage'] = '<script type="text/javascript">
                alert("Id not found");
                </script>
                ';
        } else {
            $_SESSION['deletemessage'] = '<script type="text/javascript">
                alert("Item Deleted Successfully");</script>';
        }
    }
}

deleteItem();
header('Location: http://localhost/museum-website/admin.php');
exit();
?>