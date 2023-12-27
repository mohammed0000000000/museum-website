<?php
$ModifyTic = '';
$ModifyTic1 = '';
$ModifyTic2 = '';
$ModifyTic3 = '';
$total = '';
if (isset($_POST['ticketTitle'])||isset($_POST['ticketPrice'])||isset($_POST['ticketExpiration'])) {
    $name = (isset($_POST['ticketTitle'])) ? $_POST['ticketTitle'] :'';
    $price = (isset($_POST['ticketPrice'])) ? $_POST['ticketPrice'] :'';
    $date = (isset($_POST['ticketExpiration'])) ? $_POST['ticketExpiration'] :'';
    $host = 'localhost';
    $user = 'root';
    $password = "";
    $db = 'museumdb';
    $theConnection = mysqli_connect($host, $user, $password, $db);
    if ($name) {
        $modifyTicket = "UPDATE ticket SET TITLE = '$name'";
        $stmt = mysqli_prepare($theConnection, $modifyTicket);
        mysqli_stmt_execute($stmt);
        if (mysqli_stmt_affected_rows($stmt) == 0) {
            $ModifyTic1 = 'duplicate name values';
        } else {
            $ModifyTic1 = 'Ticket name modified successfully';
        }
    }
    if ($price) {
        $priceINT = (int)$price;
        $modifyTicket = "UPDATE ticket SET PRICE = $priceINT";
        $stmt = mysqli_prepare($theConnection, $modifyTicket);
        mysqli_stmt_execute($stmt);
        if (mysqli_stmt_affected_rows($stmt) == 0) {
            $ModifyTic2 = ', duplicate price values';
        } else {
            $ModifyTic2 = ', Ticket price modified successfully';
        }
    }
    if ($date) {
        $modifyTicket = "UPDATE ticket SET EXPDATE = '$date'";
        $stmt = mysqli_prepare($theConnection, $modifyTicket);
        mysqli_stmt_execute($stmt);
        if (mysqli_stmt_affected_rows($stmt) == 0) {
            $ModifyTic3 = ', duplicate expiration values';
        } else {
            $ModifyTic3 = ', Ticket expiration modified successfully';
        }
    }
    $total .= $ModifyTic1 . $ModifyTic2 . $ModifyTic3;    
    if ($total){    
        $ModifyTic = "<script> alert('$total'); </script>";
    }
}

    
?>