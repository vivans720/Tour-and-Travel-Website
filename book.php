<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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

    <div class="heading" style = "background : url(images/package-10.jpg)"> 
        <h1>Book Now</h1>
    </div>

    <!-- booking section starts  -->

    <section class="booking">
        <h1 class="heading-title">Book Your Trip!</h1>
        <form action="book_form.php" method="post" class = "book-form">
        <div class="flex">
            <div class="inputBox">
                <span>Name :</span>
                <input type="text" placeholder="Enter Your Name" name = "name">
            </div>
            <div class="inputBox">
                <span>Email :</span>
                <input type="text" placeholder="Enter Your Email" name = "email">
            </div>
            <div class="inputBox">
                <span>Phone :</span>
                <input type="number" placeholder="Enter Your Number" name = "phone">
            </div>
            <div class="inputBox">
                <span>Address :</span>
                <input type="text" placeholder="Enter Your Address" name = "address">
            </div>
            <div class="inputBox">
                <span>Where To :</span>
                <input type="text" placeholder="Place you Want to Visit" name = "address">
            </div>
            <div class="inputBox">
                <span>How Many :</span>
                <input type="number" placeholder="Number of Guests" name = "guests">
            </div>
            <div class="inputBox">
                <span>Arrivals :</span>
                <input type="date" name = "arrivals">
            </div>
            <div class="inputBox">
                <span>Leaving :</span>
                <input type="date" name = "leaving">
            </div>
        </div>
        <input type="submit" value="submit" class = "btn" name = "send">
        </form>
    </section>


    <!-- booking section ends  -->


<!-- Footer section -->

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

    <!-- footer section ends -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>