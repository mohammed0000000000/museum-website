<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Font Awesome Libarary -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Main Template css file -->
    <link rel="stylesheet" href="css/master.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <title>Museum</title>
</head>

<body>
    <!-- Start Heading -->
    <header>
        <div class="container">
            <a href="" class="logo">
                <img src="image/thelogo.png" alt="" srcset="">
            </a>
            <nav>
                <ul class="">
                    <li><a href="#landing">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Gallary</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="togal ">
                    <img src="image/the menu .png" class="menu" alt="">
                </div>
            </nav>
        </div>
    </header>
    <!-- Start land-page -->
    <div class="landing">
        <div class="text">
            <div class="content">
                <h3>Welcome To Musuem</h3>
                <p>
                    Welcome to our museum's digital realm! Step into a world where history and art intertwine to tell
                    captivating
                    stories.
                </p>
            </div>
        </div>
    </div>
    <!-- Start gallary -->
    <div class="gallary">
        <div class="container">
            <div class="specail-heading">
                <h2>GALLARY</h2>
                <P>Step into a world where history and art interwine to tell
                    captivating stories
                </P>
            </div>
            <div class="boxes">
                

                <?php

                $host = 'localhost';
                $user = 'root';
                $password = "";
                $db = 'museumdb';
                $theConnection = mysqli_connect($host, $user, $password, $db);
                $gallaryPhotos = mysqli_query($theConnection, 'select * from gallery;');

                while ($row = mysqli_fetch_array($gallaryPhotos)) {
                    $imagePath = $row ['src'];
                    $name = $row['name'];
                    $info = $row['info'];
                    ?>
                    <div class="box">
                        <div class="image">
                            <img src=<?php echo $imagePath;?> alt="">
                        </div>
                        <div class="text">
                            <h2>
                                <?php echo $row['name']; ?>
                            </h2>
                            <p>
                                <?php echo $row['info']; ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!-- Start Vedio -->
    <div class="vedio">
        <video autoplay loop muted
            src="Vedio/فيلم قصير عن الفعالية الكبرى التي سيتم تنظيمها في محافظة الأقصر قريياً.mp4"></video>
    </div>

    <!-- Start Services -->
    <div class="services">
        <div class="container">
            <div class="specail-heading">
                <h2>SERVICES</h2>
                <P>Step into a world where history and art interwine to tell
                    captivating stories
                </P>
            </div>
        </div>
    </div>
    <!-- Start About -->
    <div class="about">
        <div class="container">
            <div class="specail-heading">
                <h2>ABOUT</h2>
                <P>Step into a world where history and art interwine to tell
                    captivating stories
                </P>
            </div>
        </div>
    </div>
    <!-- Start Contact -->
    <div class="contact-us">
        <div class="container">
            <div class="specail-heading">
                <h2>CONTACT-US</h2>
                <P>Step into a world where history and art interwine to tell
                    captivating stories
                </P>
            </div>
        </div>
    </div>
    <!-- Start Footer -->
    <footer>
        <div class="container">

        </div>
    </footer>
    <script src="main.js"></script>
</body>

</html>