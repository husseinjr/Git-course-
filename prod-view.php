<?php

include("functions/userfunctions.php") ;

include("categories/includes/header.php");

include("categories/includes/navbar.php");

if(isset($_GET['product']))
{
    $product_slug = $_GET['product'];
    $product_data = getSlugActive("products",$product_slug);
    $product = mysqli_fetch_array($product_data);
    if($product)
    {
        ?>
        <div class="py-5">
            <br>
            <div class="bg-light py-4">
                <div class="container product_data mt-3 ">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="shadow">
                                <img src="uploads/<?=$product['image']?>" alt="product image" class="w-100">
                            </div> 
                        </div>
                        <div class="col-md-8">
                            <h3 class="fw-bold"><?= $product['name']?></h3>
                            <span class="text-danger"><?php if($product['trending']){ echo "Trending Now"; }?></span>
                                <hr>
                            <p><?= $product['small_description']?></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4><span class="text-success fw-bold px-2"> <?= $product['selling_price']?></span>EGP </h4>
                                </div>
                                <div class="col-md-6">
                                    <h5><s class="text-danger px-1"> <?= $product['original_price']?></s>EGP </h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group mb-3 counter" style="width:120px">
                                        <button class="input-group-text decrement-btn" > - </button>
                                        <input type="text" class="form-control text-center ctr-val"  disabled value="1">
                                        <button class="input-group-text increment-btn" > + </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <button class="btn btn-primary px-4 addToCartBtn" value="<?= $product['id']?>">Add to Cart<i class="fa fa-shopping-cart me-2"></i></button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-danger px-4">Add to Wishlist<i class="fa fa-heart me-2"></i></button>
                                </div>
                            </div>
                            <hr>
                            <h5>وصف المنتج:</h5>
                            <p><?= $product['description']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php

    }else
    {
        ?>
        <div class="py-5">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center ">
                            <h2 class="display-4 text-white"><strong class="st-wr">product not found</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
else
{
    ?>
    <div class="py-5">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center ">
                        <h2 class="display-4 text-white"><strong class="st-wr">Something Went Wrong</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/custom.js"></script>
    <?php
}
?>
<?php include('categories/includes/footer.php')?>