<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book a ticket</title>
    <link rel="stylesheet" href="css/booking.css">
</head>

<body>
    <form action="<?php 
    @include 'php/bookmethod.php'
    ?>" method='POST'>
        <div class="in">
            <label for="email">Email : </label>
            <input name="bookemail" type="text" placeholder="Enter your Email" required>
        </div>
        <div class="in">
            <label for="bookcredit">Credit card : </label>
            <input name="bookcredit" type="text" placeholder="1111 2222 3333 4444" required>
        </div>
        <div class="in to">
            <div class="one">
                <label for="exdate">Exprire date : </label>
                <input name="exdate" type="text" placeholder="yyyy/mm/dd" required>
            </div>
            <div class="one">
                <label for="cvc">CVC : </label>
                <input name="cvc" type="text" placeholder="123" required>
            </div>

        </div>

        <button type=submit>
            book
        </button>
        <?php
        if (isset($_SESSION['bookmessage'])) {
            echo $_SESSION['bookmessage'];
            unset($_SESSION['bookmessage']);
        }
        ?>


    </form>
</body>

</html>