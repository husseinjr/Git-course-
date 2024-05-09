<?php
include('functions/userfunctions.php');

include('cart-includes/header.php');

include('authenticate.php');
?>
<?php include('cart-includes/navbar.php')?>

<div class="pattertn">
    <section class="shpppingCart container">
        <h2>السلة</h2>
        <!-- start cart -->
        <div class="row mt-2 text-start" id="my_cart">
            <div class="col-md-8 scrol ">       
                <?php $items = getCartItems();
                $counter_cart= 0;
                $price_cart = 0;
                
                if(mysqli_num_rows($items) > 0)
                {
                    foreach ($items as $citem) {
                        
                        ?>
                            <div class="row product_data item mt-3 align-item-center">
                                <div class="col-md-2">
                                    <img src="uploads/<?= $citem['image']?>" class="w-50">
                                </div>
                                <div class="col-md-3">
                                    <h5><?= $citem['name']?></h5>
                                </div>
                                <div class="col-md-3 ">
                                    <span> EGP <?= $citem['selling_price']?></span>
                                </div>
                                <div class="col-md-2">
                                    <input type="hidden" class="prodId" value="<?= $citem['prod_id'] ?>">
                                    <div class="input-group mb-3 counter" style="width:120px">
                                        <button class="input-group-text updateQty decrement-btn"> - </button>
                                        <input type="text" class="form-control text-center ctr-val" disabled value="<?= $citem['prod_qty']?>">
                                        <button class="input-group-text updateQty increment-btn"> + </button>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input type="hidden" name="payment_mode" value="COD">
                                <button class="btn deleteItem" value="<?= $citem['cid']?>"><i class="fa-solid fa-trash-can" id="delet-item"></i></button>    
                                </div>
                            </div>    
                        <?php
                        $counter_cart = $counter_cart + $citem['prod_qty'];
                        $price_cart = $price_cart + ($citem['selling_price'] * $citem['prod_qty']);
                    }
                }
                else
                {
                    ?>
                        <div class="float-end mt-3 text-white me-3">
                            <h3>السله فارغه</h3>
                            <a href="index.php" class="btn brow-btn " > <strong> تصفح المنتجات </strong></a>
                        </div>
                    <?php
                }
                    ?>
            </div>
            <div class="col-md-4 " >
                <div class="sales-info" id="checkout_info">
                    <h3>ملخص الطلب <i class="fa-solid fa-arrow-down "></i></h3>
                    <div class="totalItem">
                        <p>عداد القطع</p>
                        <span><?= $counter_cart ?></span>
                    </div>
                    <hr>
                    <div class="totalItem mt-4">
                        <p>الطلب الكلي </p>
                        <span><?= $price_cart ?> EGP </span>
                    </div>
                    <?php
                    if(mysqli_num_rows($items) > 0)
                    {
                        ?>
                        <div class="float-end mt-3 text-center me-3">
                            <a href="checkout.php" class="btn btn-danger" >إتمام الشراء</a>
                        </div>
                        <?php
                    }
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
</div>

<?php include('cart-includes/footer.php')?>