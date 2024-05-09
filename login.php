<?php 
session_start();
?>

<?php
if (isset($_SESSION['auth'])) 
{
    header('location: index.php');
    exit();
}
?>

<?php include('login/includes/header.php') ?>


    <!-- form -->
    <div class="wrapper">

        <span class="bg-animate"></span>
        <!-- left side -->
        <!-- side log in -->
        <form class="form-box login" action="functions/authcode.php" method="post" >
            <!-- title left-side -->
            <h2>تسجيل الدخول</h2>
            <form action="">
                <!-- username -->
                <div class="input-box">
                    <input type="text" required name="email">
                    <!-- title username-->
                    <label for="">بريدك الالكتروني</label>
                    <!-- icin user -->
                    <i class="fa-solid fa-user"></i>
                </div>

                <!-- password -->
                <div class="input-box ">
                    <!-- placeholder -->
                    <input type="password" required name="password">
                    <!-- title password -->
                    <label for=""> كلمة المرور</label>
                    <!-- icon password -->
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div>
                    <?php 
                    if(isset($_SESSION['message']))
                        {
                    ?>
                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> <!-- Close button functionality -->
                            <strong><?= $_SESSION['message']?></strong>
                        </div>
                    <?php
                        unset($_SESSION['message']);
                        }
                    ?>
                </div>
                <!-- log in btn -->
                <button type="submit" class="btn" name="login_btn">دخول </button>
                <!-- ask about your acount -->
                <div class="logreg-link">
                    <!-- sign up -->
                    <p> ليس لدي حساب ؟<a href="register.php" class="register-link"> تسجيل </a></p>
                </div>
            </form>
        </form>
        <!-- side right -->
        <div class="info-text login">
            <h2>مرحبا بك</h2>
            <p>قم بتسجيل الدخول </p>
        </div>

    </div>




<?php include('login/includes/footer.php') ?>