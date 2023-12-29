<?php 
session_start();
if(!$_SESSION['logged']){
    header('Location: http://localhost/museum-website/login.php');
    exit();
}
if(!$_SESSION['adminAccess']){
    header('Location: http://localhost/museum-website/login.php');
    exit();
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Admin Panel CSS-->
    <link rel="stylesheet" href="css/admin panel.css">
    <!-- Font Awesome Libarary -->
    <link rel="stylesheet" href="css/all.min.css">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/admin panel.css">

</head>

<body>

    <header>
        <div class="header-background">
            <div class="header-container">

                <a class="logo">
                    <img src="image/thelogo.png" alt="" srcset="">
                </a>
                <h1>AdminPanel</h1>
            </div>
            <nav>
                <h2>Options list</h2>
                <div class="header-container">
                    <ul>
                        <li><a href="#addItem">Add Items</a></li>
                        <li><a href="#modifyItem">Modify Items</a></li>
                        <li><a href="#deleteItem">Delete Items</a></li>
                        <li><a href="#addExhibition">Add Exhibitions</a></li>
                        <li><a href="#modifyExhibition">Modify Exhibitions</a></li>
                        <li><a href="#modifyTicket">Modify Ticket</a></li>
                        <li><a href="#generateReport">Generate Report</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- secound section  -->
    <section class="right">
        <br id="addItem">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="addItem general">
            <div class="container">
                <form action="php/addItemFunc.php" method="POST">
                    <h1>ADD ITEM</h1>
                    <div class="formcontainer">
                        <div class="container">
                            <label for="ItemName"><strong>Item Name</strong></label>
                            <input type="text" placeholder="Enter Item Name" name="AddItemName" required>
                            <label for="ItemInfo"><strong>Item Information</strong></label>
                            <input type="text" placeholder="Enter Item Information" name="AddItemInfo" required>
                            <label for="ImagePath"><strong>Image Path</strong></label>
                            <input type="text" placeholder="Enter Image Path" name="AddImagePath" required>
                        </div>
                        <?php
                        if (isset($_SESSION['addmessage'])) {
                            echo $_SESSION['addmessage'];
                            unset($_SESSION['addmessage']);
                        }
                        ?>
                        <button type="submit"><strong>ADD ITEM</strong></button>

                    </div>
                </form>
            </div>
        </div>
        </script>
        <br id="modifyItem">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="modifyItem general">
            <div class="container">
                <form action="php/modifyItemFunc.php" method="POST">
                    <h1>MODIFY ITEM</h1>
                    <div class="formcontainer">
                        <div class="container">
                            <label for="ItemID"><strong>ID</strong></label>
                            <input type="text" placeholder="Enter Item ID" name="ModifyItemID" required>
                            <label for="ItemName"><strong>Item Name</strong></label>
                            <input type="text" placeholder="Enter Item Name" name="ModifyItemName">
                            <label for="ItemInfo"><strong>Item Information</strong></label>
                            <input type="text" placeholder="Enter Information" name="ModifyItemInfo">
                            <label for="ImagePath"><strong>Image Path </strong></label>
                            <input type="text" placeholder="Enter Image Path" name="ModifyImagePath">
                        </div>
                        <?php
                        if (isset($_SESSION['modmessage'])) {
                            echo $_SESSION['modmessage'];
                            unset($_SESSION['modmessage']);
                        }
                        ?>
                        <button type="submit"><strong>MODIFY ITEM</strong></button>

                    </div>
                </form>
            </div>
        </div>
        <br id="deleteItem">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="deleteItem general">
            <div class="container">
                <form action="php/deleteItemFunc.php" method="POST">

                    <h1>DELETE ITEM</h1>
                    <div class="formcontainer">
                        <div class="container">
                            <label for="ItemID"><strong>ID</strong></label>
                            <input type="text" placeholder="Enter Item ID" name="DeleteItemID" required>
                        </div>
                        <?php
                        if (isset($_SESSION['deletemessage'])) {
                            echo $_SESSION['deletemessage'];
                            unset($_SESSION['deletemessage']);
                        }
                        ?>
                        <button type="submit"><strong>DELETE ITEM</strong></button>

                    </div>
                </form>
            </div>
        </div>
        <br id="addExhibition">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="addExhibition general">
            <div class="container">
                <form action='php/addExhibitionFunc.php' method="POST">
                    <h1>ADD EXHIBITION</h1>
                    <div class="formcontainer">
                        <div class="container">
                            <label for="exhibitionName"><strong>Exhibition Name</strong></label>
                            <input type="text" placeholder="Enter Exhibition Name" name="AddExhibitionName" required>
                            <label for="exhibitionInfo"><strong>Exhibition Info</strong></label>
                            <input type="text" placeholder="Enter Exhibition Info" name="AddExhibitionInfo" required>
                            <label for="exhibitionDate"><strong>Exhibition Date</strong></label>
                            <input type="date" name="AddExhibitionDate" required>
                        </div>
                        <?php
                        if (isset($_SESSION['addExmessage'])) {
                            echo $_SESSION['addExmessage'];
                            unset($_SESSION['addExmessage']);
                        }
                        ?>
                        <button type="submit"><strong>ADD EXHIBITION</strong></button>
                    </div>
                </form>
            </div>
        </div>
        <br id="modifyExhibition">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="modifyExhibition general">
            <div class="container">
                <form action='php/modifyExhibitionFunc.php' method="POST">
                    <h1>MODIFY EXHIBITION</h1>
                    <div class="formcontainer">
                        <div class="container">
                            <label for="exhibitionID"><strong>ID</strong></label>
                            <input type="text" placeholder="Enter Exhibition ID" name="ModifyExhibitionID" required>
                            <label for="exhibitionName"><strong>Exhibition Name</strong></label>
                            <input type="text" placeholder="Enter Exhibition Name" name="ModifyExhibitionName">
                            <label for="exhibitionInfo"><strong>Exhibition Info</strong></label>
                            <input type="text" placeholder="Enter Exhibition Info" name="ModifyExhibitionInfo">
                            <label for="exhibitionDate"><strong>Exhibition Date</strong></label>
                            <input type="date" name="ModifyExhibitionDate">
                        </div>
                        <?php
                        if (isset($_SESSION['ModifyEx'])) {
                            echo $_SESSION['ModifyEx'];
                            unset($_SESSION['ModifyEx']);
                        }
                        ?>
                        <button type="submit"><strong>MODIFY EXHIBITION</strong></button>
                    </div>
                </form>
            </div>
        </div>
        <br id="modifyTicket">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="modifyTicket general">
            <div class="container">
                <form action='php/modifyTicketFunc.php' method="POST">
                    <h1>MODIFY TICKET</h1>
                    <div class="formcontainer">
                        <div class="container">
                        
                            <label for="ticketID"><strong>Ticket ID</strong></label>
                            <input type="text" placeholder="Enter Ticket ID" name="ticketID" required>
                            <label for="ticketTitle"><strong>Ticket Title</strong></label>
                            <input type="text" placeholder="Enter Ticket Title" name="ticketTitle">
                            <label for="ticketPrice"><strong>Ticket Price</strong></label>
                            <input type="text" placeholder="Enter Ticket Price" name="ticketPrice">
                            <label for="ticketExpiration"><strong>Expiration Date</strong></label>
                            <input type="date" name="ticketExpiration">
                        </div>
                        <?php
                        if (isset($_SESSION['ModifyTic'])) {
                            echo $_SESSION['ModifyTic'];
                            unset($_SESSION['ModifyTic']);
                        }
                        ?>
                        <button type="submit"><strong>MODIFY TICKET</strong></button>
                    </div>

                </form>
            </div>
        </div>
        <br id="generateReport">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="generateReport general">
            <div class="container">
                <form action="php/generateReportFunc.php" method="POST">
                    <h1>GENERATE REPORT</h1>
                    <div class="formcontainer">
                        <button type="submit"><strong>GENERATE REPORT</strong></button>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <script src="js/admin.js"></script>
</body>

</html>