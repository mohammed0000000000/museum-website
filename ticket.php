<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Font Awesome Libarary -->
    <link rel="stylesheet" href="css/fontawesome-free-6.5.1-web/css/all.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Main Template css file -->
    <link rel="stylesheet" href="css/ticket.css">
    <title>Online Ticket</title>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div href="" class="logo">
                    <img src="image/thelogo.png" alt="" srcset="">
                </div>
                <form class='fheas' action="<?php include 'php/counttic.php'?>" method="POST">
                    <button type="submit" name='homepage'>
                    <div class="togal">
                    <i class="fa-solid fa-house"></i>
                </div>
                    </button>
                </form>
            </nav>
        </div>
    </header>
    <div class="landing">
        <div class="container">
            <div>
                <h2>Book Your Ticket</h2>
            </div>
            <div class="date">
                <div class="in">
                    <label for="">
                        <h3>Choose Your Visit Date :</h3>
                    </label>
                    <input required type="date" name="" id="">
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Type</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="type">Vistor - Arab</td>
                        <td class="numb">
                            <form method='POST' action="<?php @include 'php/counttic.php'; ?>">
                                <input required id="frist" type="number" name="arab" id="" value="0">
                            </form>
                        </td>
                        <td class="price">30 EGP</td>
                    </tr>
                    <tr>
                        <td class="type">Student - Arab</td>
                        <td class="numb">
                            <form method='POST' action="<?php @include 'php/counttic.php'; ?>"><input required id="second" type="number"
                                    name="std" id="" value="0"></form>
                        </td>
                        <td class="price">15 EGP</td>
                    </tr>

                        <td class="type">Tourist</td>
                        <td class="numb">
                            <form method='POST' action="<?php @include 'php/counttic.php'; ?>"><input required id="third" type="number" name="tor" id="" value="0"></form>
                        </td>
                        <td class="price">300 EGP</td>
                    </tr>
                    <tr>
                        <td class="type">Total : </td>
                        <td id="total"> 0 </td>
                    </tr>
                    <tr>
                        <td class="type last">Booking : </td>
                        <td class="last">
                            <form action="<?php @include 'php/counttic.php'; ?>" method='POST'>
                                <button type="submit" name='btn'>Press</button>
                            </form>
                        </td>
                    </tr>

                </tbody>
            </table>
            <div class="text">
                <div class="content">
                    <div class="row">
                        <div class="col">
                            <h3>Opening hours</h3>
                            <p>9:00 am – 5:00 pm every day</p>
                            <p>ticket booth closes at 4:15 pm</p>
                        </div>
                        <div class="col">
                            <p>Free entrance for children under 6 years</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="col">
                <h4 class="">CONNECT WITH US</h4>
                <div class="d-flex justify-content-center item social mb-2">
                    <a href="https://www.facebook.com/EgyptianMuseumCairo/"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/egyptianmuseumc"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="col">
                <p>For support</p>
                <p></p>
                <div>Tel: <a href="tel:+20235317344">+20235317344</a></div>
                <div>Email: <a href="mailto:tourism_info@easwaaqmisr.com">tourism_info@easwaaqmisr.com</a> </div>
                <p></p>
                <p>From 9:00 AM to 6:00 PM</p>
            </div>
        </div>
    </div>
    <script src='js/ticket.js'></script>
</body>

</html>