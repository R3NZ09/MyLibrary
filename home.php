<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, available, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
   <title>Home</title>



   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
   
<?php include 'header.php'; ?>


<!-- Home Page section start here  -->

<section class="home">

   <div class="content">
      <h3>PLM LIBRARY</h3>
      <p>Welcome to the PLM Online Library, We made this website for PLM students to have free sources of books 
         and to read and learn from the featured decades.</p>
      <a href="about.php" class="white-btn">Discover more</a>
      </style>
   </div>
</section>



<!-- Home Page section End here  -->

<!--Section For icons starts-->

<section class="icons-container">

<div class="icons">
    <i class="fas fa-book"></i>
       <div class=""content>
     <h3>Free books</h3>
     <p>Borrow over PLM</p>
  </div>
</div>


<div class="icons">
    <i class="fas fa-lock"></i>
       <div class=""content>
    <h3>Secured books</h3>
    <p>secured PLM Websites</p>
</div>
</div>

<div class="icons">
    <i class="fas fa-redo-alt"></i>
       <div class=""content>
    <h3>Easy Return</h3>
     <p>days returs</p>
</div>
</div>

<div class="icons">
    <i class="fas fa-headset"></i>
       <div class=""content>
    <h3>Open Websites</h3>
     <p>You can Borrow and buy anytime</p>
</div>
</div>

</section>

<!--Section For icons End-->
<!-- Home Products section Start here  -->

<section class="products">

   <h1 class="title">latest books</h1>

   <div class="box-container">

   <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `books`") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
      
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price"><?php echo $fetch_products['available']; ?></div>
      <input type="hidden" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['available']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="Add To Borrow" name="add_to_cart" class="btn">
     </form>
     
      <?php
      
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="books.php" class="option-btn">Load more</a>
   </div>

</section>

<!-- Home Products section End here  -->

<!-- Home about section Start here  -->

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/free.png" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>Our library management system is a comprehensive website that is designed to improve efficiency 
            and automate numerous library-related duties. It provides an effective and user-friendly platform 
            for managing and organizing the complete library collection, including books, periodicals, media, 
            and other resources. </p>
         <a href="about.php" class="btn">Read More</a>
      </div>

   </div>

</section>


<!-- Home Products section Start here  -->


<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p> Please go ahead and ask your question. I'll do my best to provide you with a helpful answer.</p>
      <a href="message.php" class="white-btn">contact us</a>
   </div>

</section>

<!-- Home Products section End here  -->






<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>