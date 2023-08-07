<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

if(isset($_POST['update_order'])){

   $order_update_id = $_POST['order_id'];
   $update_payment = $_POST['update_payment'];
   mysqli_query($conn, "UPDATE `borrow` SET books_status = '$update_payment' WHERE id = '$order_update_id'") or die('query failed');
   $message[] = 'borrow books status has been updated!';

}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `borrow` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_borrow.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="admin_style.css?v=<?php echo time(); ?>">
   <title>borrow</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="orders">

   <h1 class="title">Student Information</h1>

   <div class="box-container">
      <?php
      $grand_total = 1;
      $select_orders = mysqli_query($conn, "SELECT * FROM `borrow`") or die('query failed');
      if(mysqli_num_rows($select_orders) > 0){
         while($fetch_orders = mysqli_fetch_assoc($select_orders)){
            $sub_total = $fetch_orders['total_books'] / $fetch_orders['total_books'];
            $grand_total += $sub_total;
      ?>
      <div class="box">
         <p> ID : <span><?php echo $fetch_orders['user_id']; ?></span> </p>
         <p> Date : <span><?php echo $fetch_orders['date']; ?></span> </p>
         <p> Name : <span><?php echo $fetch_orders['name']; ?></span> </p>
         <p> Course & Block : <span><?php echo $fetch_orders['course_block']; ?></span> </p>
         <p> Email : <span><?php echo $fetch_orders['email']; ?></span> </p>
         <p> Address & Phone no. : <span><?php echo $fetch_orders['address']; ?></span> </p>
         <p> Borrow method : <span><?php echo $fetch_orders['method']; ?></span> </p>
         <p> Books Borrow : <span><?php echo $fetch_orders['total_borrow']; ?></span> </p>
         <form action="" method="post">
            <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id']; ?>">
            <select name="update_payment">
               <option value="" selected disabled><?php echo $fetch_orders['books_status']; ?></option>
               <option value="pending">Pending</option>
               <option value="Ready for Pickup">Ready for Pickup</option>
               <option value="Books Returned">Books Returned</option>
               <option value="Your returned Book has damage you need to Pay">Your returned Book has damage you need to Pay </option>
               <option value="Damage Paid">Damage Paid</option>

            </select>
            <input type="submit" value="update" name="update_order" class="option-btn">
            <a href="admin_borrow.php?delete=<?php echo $fetch_orders['id']; ?>" onclick="return confirm('delete this order?');" class="delete-btn">delete</a>
         </form>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no borrow placed yet!</p>';
      }
      ?>
   </div>

</section>










<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>