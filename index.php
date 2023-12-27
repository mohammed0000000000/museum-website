<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Font Awesome Libarary -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<<<<<<< HEAD

    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/service.css">
    <title>Museum</title>
=======
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Main Template css file -->
    <link rel="stylesheet" href="css/master.css">
    <title> Museum</title>
>>>>>>> 940be26b54f6abb8daed34e5ba75443dfc9f7627
</head>

<body>
    <!-- Start Heading -->
    <header>
        <div class="container">
            <nav>
                <div href="" class="logo">
                    <img src="image/thelogo.png" alt="" srcset="">
                </div>
                <ul>
                    <li><a href="#Land">Home</a></li>
                    <li><a href="#Services">Services</a></li>
                    <li><a href="#Gallary">Gallary</a></li>
                    <li><a href="#About">About</a></li>
                    <li><a href="#ContactUS">Contact</a></li>
                </ul>
                <div class="togal">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>
    <!-- Start land-page -->
    <div class="landing" id="Land">
        <div class="intro">
            <div class="contant">
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
    <div class="gallary" id="Gallary">
        <div class="container">
            <div class="specail-heading">
                <h2>GALLARY</h2>
                <P>Step into a world where history and art interwine to tell
                    captivating stories
                </P>
            </div>
            <div class="boxes">
                <?php
                @include('php/main.php');
                generateGallery();
                ?>
            </div>
        </div>
    </div>
    <!-- Start Vedio -->
    <div class="vedio">
        <video autoplay loop muted
            src="Vedio/فيلم قصير عن الفعالية الكبرى التي سيتم تنظيمها في محافظة الأقصر قريياً.mp4"></video>
    </div>

    <!-- Start Services -->
    <div class="services" id="Services">
        <div class="container">
            <div class="specail-heading">
                <h2>SERVICES</h2>
                <P>Step into a world where history and art interwine to tell
                    captivating stories
                </P>
                <div class="boxes">
                    <?php @include 'php/services.php';
                    
                    ?>
                </div>
                <div class="tic">
                    <button type='submit'>ONLINE ticket</button>
                    <span class="price" style="display :block;">120$</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Start About -->
    <div class="about" id="About">
        <div class="container">
            <div class="specail-heading">
                <h2>ABOUT</h2>
                <P>Step into a world where history and art interwine to tell
                    captivating stories
                </P>
            </div>
            <div class="title">
                <h2>THE EGYPTIAN MUSEUM</h2>
                <P>Since 1902</P>
            </div>
            <div class="content">
                <div class="box">
                    <img src="image/cornerstone-egyptian-museum-cairo-emc.jpeg" alt="">
                    <p class="info">Isis Keystone being hoisted above the main entrance of the Egyptian Museum.</p>
                </div>
                <div class="box">
                    <img src="image/Museum-original-draw.jpg" alt="">
                    <p class="info">Original drawing of the museum</p>
<<<<<<< HEAD
                    <p>Designed by the French architect Marcel Dourgnon, and built by the Italian company owned by
                        Giuseppe Garozzo and
=======
                    <p>Designed by the French architect Marcel Dourgnon, and built by the Italian company owned by Giuseppe Garozzo
                        and
>>>>>>> 940be26b54f6abb8daed34e5ba75443dfc9f7627
                        Francesco Zaffrani...</p>
                    <div class="linka">
                        <a href="https://en.wikipedia.org/wiki/Egyptian_Museum">More Information About Museum</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Contact -->
    <div class="contact-us" id="ContactUS">
        <div class="container">
            <div class="specail-heading">
                <h2>CONTACT-US</h2>
                <P>For inquiries and information kindly fill
                    this form and we will get back to you as soon as possible.
                </P>
            </div>
            <div class="content">
                <div class="box location">
                    <h2>EMC Location</h2>
                    <p class="info">The Egyptian Museum in Cairo (EMC) is one of Egypt’s most important attractions that
                        should not be missed during
                        your
                        stay in Cairo. It is located on the northern side of Tahrir Square, Downtown, Cairo.</p>
                    <p><i class="fa-sharp fa-solid fa-location-pin"></i>Tahrir Square,Downlown,Cairo -Egypt</p>
                    <p><i class="fa-solid fa-phone"></i>+20 225 796 948</p>
                    <P><i class="fa-solid fa-envelope"></i><a href="">egyptionmuseum@moanlig.gov.eg</a></P>
                    <img src="image/banner-egypt-monuments.jpg" alt="" srcset="">
                </div>
                <div class="box contact">
                    <h2>ONLINE INQUIRY</h2>
                    <form action="">
                        <input type="text" name="name" id="" placeholder="Name">
                        <input type="email" name="email" id="" placeholder="E-mail">
                        <input type="tel" name="phone" id="" placeholder="Phone">
                        <input type="text" name="subject" id="" placeholder="Subject">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message jkkdfjkf">
                    </textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer -->
    <footer>
        <div class="container">
            <div class="box">
                <img src="image/logo-egy-ministry-of-Tourism-antiquities-00-1.png" alt="" srcset="">
            </div>
            <div class="box">
                <img src="image/logo-egyptian-museum-cairo.png" alt="" srcset="">
            </div>
            <div class="box">
                <p>Follow Us</p>
                <div>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="text">
            <p>This website uses cookies to ensure you get the best experience on our website. <span><a href="#">cookies
                        Policy</a></span></p>
        </div>
    </footer>
    <script src="main.js"></script>
</body>
<<<<<<< HEAD

=======
>>>>>>> 940be26b54f6abb8daed34e5ba75443dfc9f7627
</html>