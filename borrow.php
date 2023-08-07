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
   $address = mysqli_real_escape_string($conn, $_POST['city'].', '.$_POST['country']);
   $placed_on = date('d-M-Y');

   $cart_total = 0;
   $cart_products[] = '';

   $cart_query = mysqli_query($conn, "SELECT * FROM `borrow` WHERE user_id = '$user_id'") or die('query failed');
   if(mysqli_num_rows($cart_query) > 0){
      while($fetch_orders = mysqli_fetch_assoc($orders_query)){ 
         $cart_products[] = $cart_item['name'].' ('.$cart_item['total_books'].') ';
         $sub_total = ($fetch_orders['price'] * $fetch_orders['total_books']);
         $grand_total += $sub_total;
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
   <title>borrow</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Borrow Books</h3>
</div>

<section class="placed-orders">

   <h1 class="title">Student Borrow Information</h1>

   <div class="box-container">

   <?php
$grand_total = 1;
$order_query = mysqli_query($conn, "SELECT * FROM `borrow`WHERE user_id = '$user_id'") or die('query failed');
if(mysqli_num_rows($order_query) > 0){
    while($fetch_orders = mysqli_fetch_assoc($order_query)){   
      $sub_total = $fetch_orders['total_books'] / $fetch_orders['total_books'];
        $grand_total += $sub_total;
 
?>      
      <div class="box">
         <p> Date : <span><?php echo $fetch_orders['date']; ?></span> </p>
         <p> Name : <span><?php echo $fetch_orders['name']; ?></span> </p>
         <p> Course & Block : <span><?php echo $fetch_orders['course_block']; ?></span> </p>
         <p> Email : <span><?php echo $fetch_orders['email']; ?></span> </p>
         <p> Address & Phone no. : <span><?php echo $fetch_orders['address']; ?></span> </p>
         <p> Borrow method : <span><?php echo $fetch_orders['method']; ?></span> </p>
         <p> Books Borrow : <span><?php echo $fetch_orders['total_borrow']; ?></span> </p>
         <p> books status : <span style="color:<?php if($fetch_orders['books_status'] === 'pending'){ echo 'red'; }if($fetch_orders['books_status'] === 'Your returned Book has damage you need to Pay'){ echo 'red'; }else{ echo 'green'; } ?>;"><?php echo $fetch_orders['books_status']; ?></span> </p>
         </div>
      <?php
       }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      ?>
   </div>

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>