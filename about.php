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
   <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
   <title>about</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
   <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"rel="stylesheet"/>


   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   
   <h3>about us</h3>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/free.PNG" alt="">
      </div>

      <div class="content">
         <h3>PLM LIBRARY MANAGEMENT SYSTEM</h3>
         <p>Our library management system also includes tools that make administrative work easier, 
            such as reporting, managing fines and penalties, and monitoring overdue items. It allows 
            for seamless access to extra resources and interlibrary loan systems by integrating with 
            X`external databases.</p>
         <p>Overall, our library management system is intended to improve libraries' efficiency, 
            accessibility, and user experience, allowing them to better serve their communities and 
            foster a love of reading and learning.</p>
         <a href="message.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">PLM Student's reviews</h1>

<!--STARTS OF REVIEW SECTION HERE-->

<div class="swiper reviews-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide box">
            <img src="images/pic-1.PNG" alt="">
            <h3>Mark Joseph Laya</h3>
            <p> I love reading book In this website, its totally free and very usefull as a student PLM, That I can open books
             and read free.
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="images/pic-2.PNG" alt="">
            <h3>Lee Andrew Runes</h3>
            <p> I love reading book In this website, its totally free and very usefull as a student PLM, That I can open books
             and read free.
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="images/pic-3.PNG" alt="">
            <h3>Sherwin Pineda</h3>
            <p> I love reading book In this website, its totally free and very usefull as a student PLM, That I can open books
             and read free.
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="images/pic-4.PNG" alt="">
            <h3>Lorence Gonzales</h3>
            <p> I love reading book In this website, its totally free and very usefull as a student PLM, That I can open books
             and read free.
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="images/pic-5.PNG" alt="">
            <h3>Lance Urgelles</h3>
            <p> I love reading book In this website, its totally free and very usefull as a student PLM, That I can open books
             and read free.
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="images/pic-6.PNG" alt="">
            <h3>Jeric Gaviola</h3>
            <p> I love reading book In this website, its totally free and very usefull as a student PLM, That I can open books
             and read free.
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>
</div>
</section>

<!--STARTS OF ARRIVALS SECTION HERE-->

<section class="arrivals" id="arrivals">
<h1 class="title">New Arrivals</h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
            <div class="image">
                <img src="images/book-1.jpg" alt="">
            </div>
            <div class="content">
                <h3> Women Talking</h3>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <i href="#" class="btn">Read More</i>
            </div>
        </a>

        <a href="#" class="swiper-slide box">
            <div class="image">
                <img src="images/book-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>  ICHIGO ICHIE</h3>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <i href="#" class="btn">Read More</i>
            </div>
        </a>

        <a href="#" class="swiper-slide box">
            <div class="image">
                <img src="images/book-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Normal People</h3>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <i href="#" class="btn">Read More</i>
            </div>
        </a>

        <a href="#" class="swiper-slide box">
            <div class="image">
                <img src="images/book-4.jpg" alt="">
            </div>
            <div class="content">
                <h3>Twilight</h3>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <i href="#" class="btn">Read More</i>
            </div>
        </a>

        <a href="#" class="swiper-slide box">
            <div class="image">
                <img src="images/book-5.jpg" alt="">
            </div>
            <div class="content">
                <h3>The Kiss Quotient</h3>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <i href="#" class="btn">Read More</i>
            </div>
        </a>
        </div>

    </div>
    
    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
            <div class="image">
                <img src="images/book-6.jpg" alt="">
            </div>
            <div class="content">
                <h3>Luster</h3>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <i href="#" class="btn">Read More</i>
            </div>
        </a>

        <a href="#" class="swiper-slide box">
            <div class="image">
                <img src="images/book-7.jpg" alt="">
            </div>
            <div class="content">
                <h3>The Chosen One</h3>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <i href="#" class="btn">Read More</i>
            </div>
        </a>

        <a href="#" class="swiper-slide box">
            <div class="image">
                <img src="images/book-8.jpg" alt="">
            </div>
            <div class="content">
                <h3>Will</h3>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <i href="#" class="btn">Read More</i>
            </div>
        </a>

        <a href="#" class="swiper-slide box">
            <div class="image">
                <img src="images/book-9.jpg" alt="">
            </div>
            <div class="content">
                <h3>Demon Slayer</h3>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <i href="#" class="btn">Read More</i>
            </div>
        </a>

        <a href="#" class="swiper-slide box">
            <div class="image">
                <img src="images/book-10.jpg" alt="">
            </div>
            <div class="content">
                <h3>Niverland</h3>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <i href="#" class="btn">Read More</i>
            </div>
        </a>
        </div>

    </div>
</section>

<!--ENDS OF ARRIVALS SECTION HERE-->
   

<section class="featured" id="featured">
<h1 class="title">PLM lIBRARY DEVELOPERS</h1>


    <div class="swiper feutured-slider">
 <div class="swiper-wrapper">
<div class="swiper-slide box">
    <div class="icons">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>
    <div class="image">
        <img src="images/pic-1.PNG" alt="">
    </div>
<div class="content">
    <h3>Mark Joseph Laya</h3>
    <div class="Date">Web Analysis</div>
    <a href="https://marklayawebsite.000webhostapp.com/" target="_blank" class="btn">View more</a>
</div>
</div>

<div class="swiper-slide box">
    <div class="icons">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>
    <div class="image">
        <img src="images/pic-2.PNG" alt="">
    </div>
<div class="content">
    <h3>Andrew Lee Runes</h3>
    <div class="Date">Web Analysis</div>
    <a href="https://runesleeandrew.000webhostapp.com/" target="_blank" class="btn">View more</a>
</div>
</div>

<div class="swiper-slide box">
    <div class="icons">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>
    <div class="image">
        <img src="images/pic-3.PNG" alt="">
    </div>
<div class="content">
    <h3>Sherwin Pineda</h3>
    <div class="Date">Web Developer</div>
    <a href="https://sherwinpineda.000webhostapp.com/" target="_blank" class="btn">View more</a>
</div>
</div>

<div class="swiper-slide box">
    <div class="icons">
        <a href="https://www.facebook.com/lorence.gonzales.568" target="_blank" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>
    <div class="image">
        <img src="images/pic-4.PNG" alt="">
    </div>
<div class="content">
    <h3>Lorence Gonzales</h3>
    <div class="Date">Web Developer</div>
    <a href="https://lorencegonzales.000webhostapp.com/index.php" target="_blank" class="btn">View more</a>
</div>
</div>

<div class="swiper-slide box">
    <div class="icons">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>
    <div class="image">
        <img src="images/pic-5.PNG" alt="">
    </div>
<div class="content">
    <h3>Lance Urgelles</h3>
    <div class="Date">Tester</div>
    <a href="https://itsaboutme1231.000webhostapp.com/activity.php" target="_blank" class="btn">View more</a>
</div>
</div>

<div class="swiper-slide box">
    <div class="icons">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>
    <div class="image">
        <img src="images/pic-6.PNG" alt="">
    </div>
<div class="content">
    <h3>Jeric Gaviola</h3>
    <div class="Date">Web Designer</div>
    <a href="https://gaviolawebdev1.000webhostapp.com/index.php" target="_blank" class="btn">View more</a>
</div>
</div>

<div class="swiper-slide box">
    <div class="icons">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>
    <div class="image">
        <img src="images/mark.JPG" alt="">
    </div>
<div class="content">
    <h3>Markpaul Delacruz</h3>
    <div class="Date">Web Designer</div>
    <a href="https://markpauldelacruz.000webhostapp.com" target="_blank" class="btn">View more</a>
</div>
</div>
 </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    </div>

</section>

<!--feutured section ending here-->






<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js/swiper.js"></script>

</body>
</html>