<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <section class="flex">

   <a href="../home.php">
            <img class="logo" src="http://localhost/final/Coffee-Shop/images/logopn.png" alt="error">
        </a>

      <nav class="navbar">
         <a href="home.php">TRANG CHỦ</a>
         <a href="about.php">VỀ CHÚNG TÔI</a>
         <a href="menu.php">THỰC ĐƠN</a>
         <a href="orders.php">ĐẶT HÀNG</a>
         <a href="contact.php">LIÊN HỆ</a>
      </nav>

      <div class="icons">
         <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_items = $count_cart_items->rowCount();
         ?>
         <a href="search.php"><i class="fas fa-search"></i></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_items; ?>)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p class="name"><?= $fetch_profile['name']; ?></p>
         <div class="flex">
            <a href="profile.php" class="btn">profile</a>
            <a href="components/user_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">logout</a>
         </div>
         <p class="account">
            <a href="login.php">LOGIN</a> or
            <a href="register.php">REGISTER</a>
         </p> 
         <?php
            }else{
         ?>
            <p class="name">PLEASE LOGIN FIRST!</p>
            <a href="login.php" class="btn">LOGIN</a>
         <?php
          }
         ?>
      </div>

   </section>

</header>

