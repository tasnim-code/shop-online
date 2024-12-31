<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>الصفحة الرئيسية </title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>

/* Style the brand section */
.brand-section {
    display: flex;
    align-items: center;
    padding: 20px;
    background-color: #f4f4f4;
}

.brand-logo img {
    max-width: 100px;
    height: auto;
}

.brand-info {
    flex: 1;
    padding-left: 0px;
}

.brand-info h1 {
    font-size: 10px;
    margin-bottom: 10px;
}

.brand-info p {
    font-size: 16px;
    margin-bottom: 20px;
}
</style>
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- <div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/lastsmart.png" alt="">
         </div>
         <div class="content">
            <span style="color:red";>upto 40% off</span><br> -->
            <!-- <h3 style="color:#2980b9";>latest smartphones</h3><br>
            <span style="color:black";>Iphone 14 Pro</span><br>
            <a href="shop.php" class="btn">shop now</a>
         </div> -->
      <!-- </div> -->
<!-- 
      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/lastwatch.png" alt="">
         </div>
         <div class="content">
            <span style="color:red";>upto 50% off</span><br>
            <h3 style="color:#2980b9";>latest watches</h3><br>
            <span style="color:black";>Apple Watch SE 2ND Generation</span><br>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div> -->

      <!-- <div class="swiper-slide slide">
         <div class="image">
            <img src="images/lastwatch.png" alt="">
         </div>
         <div class="content">
            <span style="color:red";>upto 50% off</span><br>
            <h3 style="color:#2980b9";>latest watches</h3><br>
            <span style="color:black";>Apple Watch SE 2ND Generation</span><br>
            <a href="shop.php" class="btn">shop now</a>
         </div> -->
      <!-- </div>
   </div> -->

      <!-- <div class="swiper-slide slide">
         <div class="image">
            <img src="images/lasth.png" alt="">
         </div>
         <div class="content">
            <span style="color:red";>upto 50% off </span><br>
            <h3 style="color:#2980b9";>latest headsets</h3><br>
            <span style="color:black";>Airpods 2ND Generation</span><br>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div> -->
<!-- 
      <div class="swiper-pagination"></div>

   </div>

</section>

</div> -->


<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">
<div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/lasth.png" alt="">
         </div>
         <div class="content">
            <!-- <span style="color:red";>up to 50% off / تخفيضات تصل إلى </span><br> -->
            <h3 style="color:#2980b9";>اخر المنتجات</h3><br>
            <span style="color:black";>سماعة ايربود</span><br>
            <span style="font-weight: 900;font-size: 20px;color:red;">ريال عماني20&nbsp;&nbsp;</span><br>
            <a href="shop.php" class="btn">تسوق الان</a>
         </div>
      </div>
      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/lastsmart.png" alt="">
         </div>
         <div class="content">
            <!-- <span style="color:red";>up to 50% off / تخفيضات تصل إلى </span><br> -->
            <h3 style="color:#2980b9";>اخر الفونات</h3><br>
            <span style="color:black";>Macbook Air M1 13.3 inch</span><br>
            <span style="font-weight: 900;font-size: 20px;color:red;">ريال عماني 397&nbsp;</span><br>
            <a href="shop.php" class="btn">تسوق الان</a>

         </div>
      </div>
      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/lastwatch.png" alt="">
         </div>
         <div class="content">
            <!-- <span style="color:red";>up to 50% off / تخفيضات تصل إلى </span><br> -->
            <h3 style="color:#2980b9";>latest Watches</h3><br>
            <span style="color:black";>Aple Watch SE 2ND Generation</span><br>
            <span style="font-weight: 900;font-size: 20px;color:red;">ريال عماني 99&nbsp;</span><br>
            <a href="shop.php" class="btn">تسوق الان</a>

         </div>
      </div>
   </div>
<div class="swiper-pagination"></div>

</div>

</section>

</div>

<section class="category">

   <h1 class="heading">التصنيفات </h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=laptops" class="swiper-slide slide">
      <img src="images/laptop.png" alt="">
      <h3> ملابس</h3>
   </a>
   <a href="category.php?category=headphones" class="swiper-slide slide">
      <img src="images/headphone.png" alt="">
      <h3>هدايا</h3>
   </a>

   <a href="category.php?category=camera" class="swiper-slide slide">
      <img src="images/icon-3.png" alt="">
      <h3>ميكب</h3>
   </a>

   <a href="category.php?category=mouse" class="swiper-slide slide">
      <img src="images/icon-4.png" alt="">
      <h3>اكسسوارات</h3>
   </a>

   <a href="category.php?category=Ipads" class="swiper-slide slide">
      <img src="images/tablet.png" alt="">
      <h3>حقائب </h3>
   </a>

   <a href="category.php?category=washing" class="swiper-slide slide">
      <img src="images/icon-6.png" alt="">
      <h3>أدوات مدرسية ومكتبية</h3>
   </a>

   <a href="category.php?category=smartphone" class="swiper-slide slide">
      <img src="images/smartphone.png" alt="">
      <h3> الكترونيات</h3>
   </a>

   <a href="category.php?category=watchs" class="swiper-slide slide">
      <img src="images/watch.png" alt="">
      <h3>احذية</h3>
   </a>
   

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<section class="home-products">

   <h1 class="heading">اخر المنتجات</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>ريال عماني</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

 <!-- <p style="font-size:30px;color:#2980b9;margin-bottom: 40px;margin-left:40px;">The most brands tec Oman used: </p>

<section class="brand-section"> 
        <div class="brand-logo">
            <img src="images/logo.png" alt="Brand Logo">
        </div>
        <div class="brand-info">
            <h1>Apple</h1>
        </div>
    
        <div class="brand-logo">
            <img src="images/logo.png" alt="Brand Logo">
        </div>
        <div class="brand-info">
            <h1>HP</h1>
        </div>
        <div class="brand-logo">
            <img src="images/logo.png" alt="Brand Logo">
        </div>
        <div class="brand-info">
            <h1>ANKER</h1>
        </div>
        <div class="brand-logo">
            <img src="images/logo.png" alt="Brand Logo">
        </div>
        <div class="brand-info">
            <h1>LONOVO</h1>
        </div>
        <div class="brand-logo">
            <img src="images/logo.png" alt="Brand Logo">
        </div>
        <div class="brand-info">
            <h1>HUAWEI</h1>
        </div>
        <div class="brand-logo">
            <img src="images/logo.png" alt="Brand Logo">
        </div>
        <div class="brand-info">
            <h1>DELL</h1>
        </div>
        <div class="brand-logo">
            <img src="images/logo.png" alt="Brand Logo">
        </div>
        <div class="brand-info">
            <h1>SONY</h1>
        </div>
        <div class="brand-logo">
            <img src="images/logo.png" alt="Brand Logo">
        </div>
        <div class="brand-info">
            <h1>SAMSONG</h1>
        </div> -->

</section><br>
<br>
<br>
<hr>
 




<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 1,
       },
      650: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 2,
      },
   },
});

</script>

</body>
</html>