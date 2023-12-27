<?php
session_start();
function modifyTicket()
{
    if (isset($_POST['ticketID'])) {
        $name = (isset($_POST['ticketTitle'])) ? $_POST['ticketTitle'] : '';
        $price = (isset($_POST['ticketPrice'])) ? $_POST['ticketPrice'] : '';
        $date = (isset($_POST['ticketExpiration'])) ? $_POST['ticketExpiration'] : '';
        $ID = $_POST['ticketID'];
        $host = 'localhost';
        $user = 'root';
        $password = "";
        $db = 'museumdb';
        $theConnection = mysqli_connect($host, $user, $password, $db);
        if ($name) {
            $modifyTicket = "UPDATE ticket SET TITLE = '$name' WHERE ID = $ID";
            $stmt = mysqli_prepare($theConnection, $modifyTicket);
            mysqli_stmt_execute($stmt);
            if (mysqli_stmt_affected_rows($stmt) == 0) {
                $ModifyTic1 = 'duplicate name values';
            } else {
                $ModifyTic1 = 'Ticket name modified successfully';
            }
        }
        if ($price) {
            $priceINT = (int) $price;
            $modifyTicket = "UPDATE ticket SET PRICE = $priceINT WHERE ID = $ID";
            $stmt = mysqli_prepare($theConnection, $modifyTicket);
            mysqli_stmt_execute($stmt);
            if (mysqli_stmt_affected_rows($stmt) == 0) {
                $ModifyTic2 = ', duplicate price values';
            } else {
                $ModifyTic2 = ', Ticket price modified successfully';
            }
        }
        if ($date) {
            $modifyTicket = "UPDATE ticket SET EXPDATE = '$date' WHERE ID = $ID";
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
            $_SESSION['ModifyTic'] = "<script> alert('$total');</script>";
        }
        $IDint = (int) $ID;
        if($IDint > 4){
            $_SESSION['ModifyTic'] = '<script> alert("incorrect ID");</script>';
        }
        
    }
}

modifyTicket();
header('Location: http://localhost/museum-website/admin.php');
exit();
?>