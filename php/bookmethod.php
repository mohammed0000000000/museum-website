<?php 
session_start();
function themain (){
    if (isset($_POST['bookcredit'])){
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $db = 'museumdb';
        $num= $_POST['bookcredit'];
        $thecvc= $_POST['cvc'];
        $theexdate= $_POST['exdate'];
        
        
        $theConnection = mysqli_connect($host, $user, $password, $db);
        
        $fetch_ex = "select * from credit where number = '$num' ";
        $stmt = mysqli_prepare($theConnection, $fetch_ex);
        mysqli_stmt_execute($stmt);
        
        // Bind variables to store the fetched data
        mysqli_stmt_bind_result($stmt, $number, $cvc, $exbiredate);
        // Fetch the first two rows
        $rows = array();
        $count = 0;
        while (mysqli_stmt_fetch($stmt) && $count < 1) {
            // Store the fetched data in an array or process it as needed
            $row = array(
                'number' => $number,
                'cvc' => $cvc,
                'exbiredate' =>$exbiredate ,
            );
            $rows[] = $row;
            $count++;
        }
        if ($rows==null ){
            $_SESSION['bookmessage']="<script> 
            alert ('your credit card is invaild');</script>
            ";
        }
        else{
        $cards = array();
        $cvcs = array();
        $exbire= array();
        foreach($rows as $row){
        $cvcs[0]= $row['cvc'];
        $exbire[0]= $row['exbiredate'];
        $cards[0]= $row['number'];
        }
         if ($thecvc== $cvcs[0] and $theexdate ==$exbire[0] and $num ==$cards[0] ){
            $digits = 16;
        $thecode= rand(pow(10, $digits-1), pow(10, $digits)-1);
        $_SESSION['bookmessage']="<script > 
        alert ('ok your Enter code is $thecode');</script>;
        ";
        }
        else { 
            $_SESSION['bookmessage']="<script> 
        alert ('your credit card is invaild');</script>
        ";
        }
        }
        }

}
themain();
header('Location: http://localhost/museum-website/booking.php');
exit();

?>