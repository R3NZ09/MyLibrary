<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['order_btn'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $number = $_POST['number'];
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $method = mysqli_real_escape_string($conn, $_POST['method']);
   $address = mysqli_real_escape_string($conn,''. $_POST['city'].','. $_POST['country']);
   $placed_on = date('d-M-Y');

   $cart_total = 0;
   $cart_products[] = '';

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
   if(mysqli_num_rows($cart_query) > 0){
      while($cart_item = mysqli_fetch_assoc($cart_query)){ 
         $cart_products[] = $cart_item['name'].' ('.$cart_item['quantity'].') ';
         $sub_total = ($cart_item['price'] * $cart_item['quantity']);
         $cart_total += $sub_total;
      }
   }

   $total_products = implode(', ',$cart_products);

   $order_query = mysqli_query($conn, "SELECT * FROM `borrow` WHERE name = '$name' AND course_block = '$number' AND email = '$email' AND method = '$method' AND address = '$address' AND total_borrow = '$total_products' AND total_books  = '$cart_total'") or die('query failed');

   if($cart_total == 0){
      $message[] = 'Your borrow books is Empty';
   }else{
      if(mysqli_num_rows($order_query) > 0){
         $message[] = 'Borrow already Added!'; 
      }else{
         mysqli_query($conn, "INSERT INTO `borrow`(user_id, name, course_block, email, method, address, total_borrow, total_books, date) VALUES('$user_id', '$name', '$number', '$email', '$method', '$address', '$total_products', '$cart_total', '$placed_on')") or die('query failed');
         $message[] = 'Borrow Added successfully!';
         mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
      }
   }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Student Information</h3>
</div>

<section class="display-order">

   <?php  
      $grand_total = 0;
      $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select_cart) > 0){
         while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $sub_total = ($fetch_cart['quantity'] / $fetch_cart['quantity']);
            $grand_total += $sub_total;
   ?>
   <p> <?php echo $fetch_cart['name']; ?> 
   <?php
      }
   }else{
      echo '<p class="empty">Borrow Books is Empty</p>';
   }
   ?>
   <div class="grand-total"> Books Total : <span><?php echo $grand_total ; ?></span> </div>

</section>

<section class="checkout">

   <form action="" method="post">
      <h3>Student Information to borrow books</h3>
      <div class="flex">
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" name="name" required placeholder="Enter your name">
         </div>
         <div class="inputBox">
            <span>Course & Block :</span>
            <input type="text" name="number" required placeholder="Enter your Number">
         </div>
         <div class="inputBox">
            <span>PLM / Personal Email :</span>
            <input type="email" name="email" required placeholder="Enter your Email">
         </div>
         <div class="inputBox">
            <span>Borrowing method :</span>
            <select name="method">
               <option value="Personal Email">Personal Borrow</option>
               <option value="PLM Email">PLM Email</option>
               <option value="Gdrive Link">Gdrive Link</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Address:</span>
            <input type="text" name="city" required placeholder="Enter Your address no.">
         </div>       
         <div class="inputBox">
            <span>Phone Number :</span>
            <input type="number" name="country" required placeholder="Enter Your Phone No.">
         </div>
         
      </div>
      <input type="submit" value="Borrow now" class="btn" name="order_btn">
   </form>

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>