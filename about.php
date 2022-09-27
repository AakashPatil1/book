<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include 'header.php';?>

    <div class="heading">
        <h3>about us</h3>
        <p><a href="home.php">home</a> / about </p>
    </div>


    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="images/i.jpg" alt="">
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dolor animi magnam illo, maiores, repudiandae accusamus error reprehenderit quibusdam ab
                    cumque asperiores architecto iste eum molestiae debitis. Illo cumque velit dignissimos.
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ipsum sunt provident eveniet odio repellendus vero tempora
                    praesentium molestias aliquid quibusdam?</p>
                <a href="contact.php" class="btn">contact us</a>
            </div>


        </div>

    </section>

    <!-- reviews section -->

    <section class="reviews">
        <h1 class="title">client's reviews</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/i.jpg" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Totam asperiores neque ipsa nam dignissimos laborum unde a officia vitae deserunt.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Ganesh </h3>
            </div>

            <div class="box">
                <img src="images/ankit.jpg" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Totam asperiores neque ipsa nam dignissimos laborum unde a officia vitae deserunt.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Ganesh </h3>
            </div>

            <div class="box">
                <img src="images/women1.jpg" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Totam asperiores neque ipsa nam dignissimos laborum unde a officia vitae deserunt.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Ganesh </h3>
            </div>
        </div>
    </section>

    <!-- reviews section -->

    <!-- greate authors section -->

    <section class="authors">

        <h1 class="title">greate authors</h1>


        <div class="box-container">

            <div class="box">
                <img src="images/men2.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Ganesh Patil</h3>
            </div>

            <div class="box">
                <img src="images/men3.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Siddhart Joshi</h3>
            </div>

            <div class="box">
                <img src="images/women3.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Roshni Oza</h3>
            </div>

            <div class="box">
                <img src="images/women4.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Harsali Desai</h3>
            </div>

            <div class="box">
                <img src="images/men4.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Gopal Roy</h3>
            </div>

            <div class="box">
                <img src="images/women6.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Sangita Mohite</h3>
            </div>
            <!-- 
            <div class="box">
                <img src="images/samachiaai.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>ganesh</h3>
            </div> -->

        </div>

    </section>

    <!-- greate authors section -->









    <?php include 'footer.php'?>

    <!-- javascript -->
    <script src="js/script.js"></script>
</body>

</html>