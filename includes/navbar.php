<?php

include('functions/userfunctions.php');

?>
<header class="header">
    <div class="container">
        <a href="index.php" class="logo"><img src="img/logo.png" alt="logo" /></a>
        <ul class="nav-ul">
            
        <li class="active"><a href="index.php">الصفحة الرئيسية</a></li>
            
        <li><a href="categories.php"> الأقسام </a></li>
            
    <?php
    if (isset($_SESSION['auth']))
    {
            
    if($_SESSION['role_as'] == 1 )
    {
    ?>
        <li><a href="Admin/index.php"> لوحة التحكم </a></li>
    <?php
    }
    ?>
            
            
    <?php 
    } else
    {
    ?>
        <li><a href="login.php">تسجيل الدخول</a></li>

        <li><a href="register.php"> تسجيل  </a></li>
    <?php
    }
    ?>
        
        <li><a href="whoweare.php"> من نحن </a></li>
    <?php
    if (isset($_SESSION['auth']))

    {
    ?>
    
        <li><a href="my-order.php"> طلباتى </a></li>
            
        <!-- <li><a href="#">تواصل معنا </a></li> -->

        <li><a href="logout.php"> تسجيل الخروج </a></li>
    
    <?php
    }
    ?>
        


        </ul>
        <a href="cart.php" type="button " class="btn btn-primary position-relative cart text-white">
        <i class="fa-solid fa-cart-shopping"></i>
        <?php 
        $items = getCartItems();
        if($items == false)
        {

        }else {
               $counter_cart= 0;
                if(mysqli_num_rows($items) > 0)
                {
                    foreach ($items as $citem) {
                        $counter_cart = $counter_cart + $citem['prod_qty'];
                    }
                    ?>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill counter">
                        <?= $counter_cart ?>+
                        </span>
                    <?php
                }
                else
                {

                }
        }

             
            ?>
        </a>
        <button class="hambrgerIcon">
        <div class="bar"></div>
        </button>

            
            
        
    </div>
</header>

