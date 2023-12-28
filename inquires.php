<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $subject =  $_POST['subject'];
    $pro =  $_POST['prapraph'];

    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $dbname = "museumdb";
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    $query = "INSERT into INQUIRIES () VALUES('$name','$email','$phone','$subject','$pro')";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}
?>