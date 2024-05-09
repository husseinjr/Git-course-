<?php 
session_start();
?>

<?php
if (isset($_SESSION['auth'])) {

    header('location:index.php');
    exit();
}
?>

<?php include('register/includes/header.php') ?>


    <!-- form -->
    <div class="wrapper">

        <span class="bg-animate"></span>
        <!-- left side -->
        <!-- side log in -->
        <form class="form-box login" action="functions/authcode.php" method="post" >
            <!-- title left-side -->
            <h2 >تسجيل الدخول مستخدم جديد</h2>
            
            <form >
                <!-- username -->
                <div class="input-box">
                    <input type="text" name="name" required>
                    <!-- title username-->
                    <label for="">اسم المستخدم</label>
                    <!-- icin user -->
                    <i class="fa-solid fa-user"></i>
                </div>
                <!-- Email -->
                <div class="input-box">
                    <!-- placeholder -->
                    <input type="text" required name="email">
                    <!-- title username-->
                    <label for="">بريدك الالكتروني</label>
                    <!-- icin user -->
                    <i class="fa-solid fa-envelope"></i>
                </div>
               <!-- phone number -->
               <div class="input-box">
                    <input type="number" required name="phone">
                    <!-- title username-->
                    <label for="">  رقم الهاتف </label>
                    <!-- icin user -->
                    <i class="fa-solid fa-user"></i>
                </div>
                <!-- password -->
                <div class="input-box ">
                    <!-- placeholder -->
                    <input type="password" required name="password">
                    <!-- title password -->
                    <label for="">انشاء كلمة سر</label>
                    <!-- icon password -->
                    <i class="fa-solid fa-lock"></i>
                </div>
                <!-- confirm password -->
                <div class="input-box ">
                    <!-- placeholder -->
                    <input type="password" required name="cpassword">
                    <!-- title password -->
                    <label for="">تأكيد كلمة السر</label>
                    <!-- icon password -->
                    <i class="fa-solid fa-lock"></i>
                </div>
                <?php 
                if(isset($_SESSION['message']))
                {
                ?>
                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> <!-- Close button functionality -->
                    <strong> <?= $_SESSION['message']?> </strong> 
                </div>
                <?php
                unset($_SESSION['message']);
                }
                ?>
                <!-- log in btn -->
                <button type="submit" class="btn" name="register_btn">سجل مستخدم</button>
                <!-- ask about your acount -->
                <div class="logreg-link">
                    <!-- sign up -->
                    <p>لدي حساب بالفعل؟ <a href="login.php" class="register-link">دخول</a></p>
                </div>
            </form>
        </form>
        <!-- side right -->
        <div class="info-text login">
            <h2>مرحبا بك</h2>
            <p>قم بتسجيل الدخول ك مستخدم جديد</p>
        </div>
        
    </div>


<?php include('register/includes/footer.php') ?>