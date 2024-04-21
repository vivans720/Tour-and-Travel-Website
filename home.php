<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelHead</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
</head>
<body>
    <!-- Header Section -->
    <section class="header">
        <a href="home.php" class = "logo">Travel.</a>

        <nav class = "navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    
    <!-- Header section ends -->


    <!-- Home section starts -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style = "background : url(images/background-1.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel Around The World</h3>
                        <a href="package.php" class = "btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style = "background : url(images/background-2.jpg) no-repeat; opacity:0.9">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Discover The New Places</h3>
                        <a href="package.php" class = "btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style = "background : url(images/background-3.jpg) no-repeat;opacity:0.9">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Make Your Tour Worth It</h3>
                        <a href="package.php" class = "btn">Discover More</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>


    <!-- Service Section Starts -->

    <section class="services">
        <h1 class="heading-title">Our Services</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/service-1.png" alt="service1" style = "background : white">
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="images/service-2.png" alt="service2" style = "background : white">
                <h3>Tour Guide</h3>
            </div>

            <div class="box">
                <img src="images/service-3.png" alt="service3" style = "background : white">
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="images/service-4.png" alt="service4" style = "background : white">
                <h3>Camp Fire</h3>
            </div>

            <div class="box">
                <img src="images/service-5.png" alt="service5" style = "background : white">
                <h3>Off Road</h3>
            </div>

            <div class="box">
                <img src="images/service-6.png" alt="service6" style = "background : white">
                <h3>Camping</h3>
            </div>
            
        </div>
    </section>


    <!-- service section ends -->


    <!-- Home about section starts  -->

    <section class="home-about">

        <div class="image">

            <img src="images/aboutus.jpg" alt="about-us" style = "width: 55rem">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam totam blanditiis facere exercitationem necessitatibus repellendus alias aspernatur voluptatibus velit magnam. Perspiciatis esse odit tempora rerum dolor voluptatem culpa facilis suscipit.</p>
            <a href="about.php" class = "btn">Read More</a>

        </div>

    </section>


    <!-- home section ends -->

    <!-- home packages section starts -->

    <section class="home-packages">

        <h1 class="heading-title">Our Packages</h1>

        <div class="box-container">

            <div class="box">

                <div class="image">
                    <img src="images/package-1.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, neque?</p>

                    <a href="book.php" class = "btn">Book Now</a>
                </div>
            </div>

            <div class="box">

                <div class="image">
                    <img src="images/package-2.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, neque?</p>

                    <a href="book.php" class = "btn">Book Now</a>
                </div>
            </div>

            <div class="box">

                <div class="image">
                    <img src="images/package-3.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, neque?</p>

                    <a href="book.php" class = "btn">Book Now</a>
                </div>
            </div>
        </div>

        <div class="load-more"><a href="package.php" class = "btn">Load More</a></div>

    </section>

    <!-- home packages section ends  -->



    <!-- home offer section starts  -->

    <div class="home-offer">
        <div class="content">
            <h3>Upto 50% Off</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima excepturi voluptatem facere aut? Nemo ab labore ratione repellat, earum ad.</p>
            <a href="book.php" class = "btn">Book Now</a>
        </div>
    </div>

    <!-- home offer section ends -->

    


<!-- Footer section starts -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
                <a href="about"> <i class="fas fa-angle-right"></i>About</a>
                <a href="package"> <i class="fas fa-angle-right"></i>Package</a>
                <a href="book"> <i class="fas fa-angle-right"></i>Book</a> 
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i>Ask Questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i>About Us</a>
                <a href="#"> <i class="fas fa-angle-right"></i>Privacy Policies</a>
                <a href="#"> <i class="fas fa-angle-right"></i>Terms of Use</a>
            
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i>+123-456-7890</a>
                <a href="#"> <i class="fas fa-phone"></i>+111-222-3333</a>
                <a href="#"> <i class="fas fa-envelope"></i>travelhead@gmail.com</a>
                <a href="#"> <i class="fas fa-map">mumbai,india - 400104</i></a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
            </div>
        </div>

        <div class="credit">Created by <span>Cloud Project Team </span>| All Rights Reserved!</div>
    </section>


    <!-- footer section ends  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>