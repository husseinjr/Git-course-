<?php
include('functions/userfunctions.php');

include('cart-includes/header.php');

include('authenticate.php');
?>
<?php include('cart-includes/navbar.php')?>
<div class="py-5">
    <br>
    <div class="container">
        <div class="row">
            <div class="container text-center mb-4">
                <h1 class="display-4"> إتمام  الشراء <img src="img/svg/true.svg" alt="" class="true-img"></h1>
            </div>
            <hr>
            <div class="container">
                <div class="checkout-card text-center">
                    <form action="functions/placeorder.php" method="post">
                        <div class="row">
                            <div class="col-md-5 mt-3">
                                <div class="row align-items-center">
                                    <h5>order details</h5>
                                    <hr>
                                    <?php $items = getCartItems();
                                    $EGP_USD = 50;
                                    $counter_cart= 0;
                                    $price_cart = 0;
                                    foreach ($items as $citem) 
                                    {    
                                    ?>
                                    <div class="mb-1 mt-3 border">             
                                        <div class="row align-item-center">
                                            <div class="col-md-2">
                                                <img src="uploads/<?= $citem['image']?>" class="w-50">
                                            </div>
                                            <div class="col-md-3">
                                                <h5><?= $citem['name']?></h5>
                                            </div>
                                            <div class="col-md-3 ">
                                                <span> EGP <?= $citem['selling_price']?></span>
                                            </div>
                                            <div class="col-md-2 ">
                                                <span>x <?= $citem['prod_qty']?></span>
                                            </div>
                                        </div> 
                                    </div>   
                                    <?php
                                    $price_cart = $price_cart + ($citem['selling_price'] * $citem['prod_qty']);
                                    }
                                    
                                    
                                    ?>
                                
                                </div>
                                <hr>
                                <div class="me-3">
                                    <input type="hidden" name="totalprice" id="totalprice" value="<?=$price_cart?>">
                                    <strong>Total Price : </strong>
                                    <span><?=$price_cart?><strong> EGP</strong></span> 
                                </div>
                                <div class="mt-3 float-end w-100">
                                    <input type="hidden" name="payment_mode" value="COD">
                                    <button type="submit" name="placeOrderBtn" class="btn btn-primary mb-3 w-100">تأكيد الشراء <strong> (الدفع عند الأستلام)</strong></button>
                                    <div id="paypal-button-container"></div>
                                </div>
                                <br>
                                <div class="mt-3">
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
                            </div>
                            <div class="col-md-7 mt-2">
                                <h5>basic details</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-bold">الأسم</label>
                                        <input type="text" name="name"  id="name"  placeholder="Enter Your Full Name" class="form-control ">
                                        <small class="name text-danger"></small>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-bold">البريد الألكترونى</label>
                                        <input type="email" name="email"  id="email"  placeholder="Enter Your E-mail" class="form-control ">
                                        <small class="email text-danger"></small>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-bold">الهاتف</label>
                                        <input type="text" name="phone"  id="phone"  placeholder="Enter Your Phone" class="form-control ">
                                        <small class="phone text-danger"></small>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-bold">رمز البريد</label>
                                        <input type="text" name="pincode"  id="pincode" placeholder="Enter Your ZIP-Code" class="form-control ">
                                        <small class="pincode text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="fw-bold">العنوان</label>
                                        <textarea name="address"  id="address"  placeholder="Enter Your Address" class="form-control " rows="5"></textarea>
                                        <small class="address text-danger"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    </div>
</div> 


<?php include('cart-includes/footer.php')?>
