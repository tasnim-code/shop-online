<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:user_login.php');
};

if(isset($_POST['order'])){

   $name = $_POST['name'];
   // $name = filter_var($name, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   // $number = filter_var($number, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   // $email = filter_var($email, FILTER_SANITIZE_STRING);
   $method = $_POST['method'];
   $address = $_POST['address'];

   // $method = filter_var($method, FILTER_SANITIZE_STRING);
   // $image_name=$_FILES['image']['name'];
   // $tem_name=$_FILES['image']['tem_name'];
   // $folder= './image/' .$image_name;
   $filename = $_FILES["image"]["name"];
   $tempname = $_FILES["image"]["tmp_name"];
   $folder = "./image/" . $filename;
  

   $total_products = $_POST['total_products'];
   $total_price = $_POST['total_price'];

     if (move_uploaded_file($tempname, $folder)) {
         echo "<h3>  شكرا جزيلا لك</h3>";
   } else {
      echo "<h3>  للأسف لم يتم تحميل الصورة</h3>";
   }  
   $check_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
   $check_cart->execute([$user_id]);

   if($check_cart->rowCount() > 0){
      
      $insert_order = $conn->prepare("INSERT INTO `orders`(user_id, name, number, email,address,method,image,total_products, total_price) VALUES(?,?,?,?,?,?,?,?,?)");
      $insert_order->execute([$user_id, $name, $number, $email, $address, $method,$filename,$total_products, $total_price]);
      
      if($insert_order){
            
            $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
            $delete_cart->execute([$user_id]);
            $message[] = 'order placed successfully!';
            // move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);           
        }
      }else{
       $message[] = 'your cart is empty';
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="checkout-orders">

   <form action="" method="POST" enctype="multipart/form-data">

   <h3>your orders</h3>

      <div class="display-orders">
      <?php
         $grand_total = 0;
         $cart_items[] = '';
         $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
         $select_cart->execute([$user_id]);
         if($select_cart->rowCount() > 0){
            while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
               $cart_items[] = $fetch_cart['name'] .' ('.$fetch_cart['price'].' x '. $fetch_cart['quantity'].') - ';
               $total_products = implode($cart_items);
               $grand_total += ($fetch_cart['price'] * $fetch_cart['quantity']);
      ?>
         <p> <?= $fetch_cart['name']; ?> &nbsp; &nbsp; color : &nbsp;<?= $fetch_cart['color']; ?> &nbsp; &nbsp;<span>(<?= 'ريال عماني'.$fetch_cart['price'].'/- x '. $fetch_cart['quantity']; ?>)</span> </p>
      <?php
            }
         }else{
            echo '<p class="empty">your cart is empty!</p>';
         }
      ?>
         <input type="hidden" name="total_products" value="<?= $total_products; ?>">
         <input type="hidden" name="total_price" value="<?= $grand_total; ?>" value="">
         <div class="grand-total">grand total : <span>ريال عماني<?= $grand_total; ?>/-</span></div>
      </div>
      <h3> الاسم:خالد الشكري<br>
         67542890987665434<br>
         بنك مسقط</h3>

      <h3>place your orders</h3>

      <div class="flex">
         <div class="inputBox">
            <span>your name :</span>
            <input type="text" name="name" placeholder="enter your name" class="box" maxlength="20" required>
         </div>
         <div class="inputBox">
            <span>your number :</span>
            <input type="number" name="number" placeholder="enter your number" class="box" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false;" required>
         </div>
         <div class="inputBox">
            <span>your email :</span>
            <input type="email" name="email" placeholder="enter your email" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span>عملية الاستلام :</span>
            <select name="method" class="box" required>
               <option value="توصيل">توصيل</option>
               <option value="بدون توصيل">بدون توصيل</option>
                <option value="paytm">paytm</option>
               <option value="paypal">paypal</option> 
            </select>
         </div>
         <!-- <div class="inputBox">
            <span>اذا كان المنتج له عدة أنواع اختار الجيجابايت المناسب لك:</span>
            <select name="method" class="box" required>
               <option value="توصيل"> 128 GB </option>
               <option value="بدون توصيل">256 GB</option>
               <option value="بدون توصيل">512 GB</option>
               <option value="paytm">paytm</option>
               <option value="paypal">paypal</option> --> 
            <!-- </select> -->
         <!-- </div> -->  
         <!-- <div class="inputBox">
            <span>اذا كان المنتج له عدة أنواع اختار الجيجابايت المناسب لك:</span>
            <select name="method" class="box" required>
               <option value="توصيل">أسود</option>
               <option value="بدون توصيل">أبيض </option>
               <option value="بدون توصيل">أحمر </option>
                <option value="paytm">paytm</option>
               <option value="paypal">paypal</option> -->
            <!-- </select> -->
         <!-- </div> -->
<!-- 
         <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image" id="image">
         </form> -->
            <div class="inputBox">
               <span>city :</span>
               <input type="text" name="address" placeholder="e.g. Nizwa" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
               <span>image / صورة الايصال(required)</span>
               <input type="file" name="image" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
            </div>
        
         <!-- <div class="inputBox">
            <span>address line 01 :</span>
            <input type="text" name="flat" placeholder="e.g. flat number" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span>address line 02 :</span>
            <input type="text" name="street" placeholder="e.g. street name" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span>city :</span>
            <input type="text" name="city" placeholder="e.g. Nizwa" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span>state :</span>
            <input type="text" name="state" placeholder="e.g. maharashtra" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span>country :</span>
            <input type="text" name="country" placeholder="e.g. Oman" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span>pin code :</span>
            <input type="number" min="0" name="pin_code" placeholder="e.g. 123456" min="0" max="999999" onkeypress="if(this.value.length == 6) return false;" class="box" required>
         </div>
      </div> -->
      
      <input type="submit" name="order" class="btn <?= ($grand_total > 1)?'':'abled'; ?>" value="place order">

   </form>
</section>

 
        
    

<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>
   

</body>
</html>