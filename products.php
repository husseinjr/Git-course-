<?php

include("functions/userfunctions.php") ;

include("categories/includes/header.php");

include("categories/includes/navbar.php");

if(isset($_GET['category']))
{

    $category_slug = $_GET['category'];
    $category_data = getSlugActive("categories",$category_slug);
    $category = mysqli_fetch_array($category_data);

if($category)
{

    $cid = $category['id'];
    ?>


    <div class="proudacts pattertn">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container text-center mb-4">
                        <h1 class="display-4 text-white"> <?= $category['name'];?> <img src="img/svg/true.svg" alt="" class="true-img"></h1>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row m-0">
            <?php 
            $products = getProdByCategory($cid);


            if(mysqli_num_rows($products) > 0)
            {
                foreach($products as $item)
                {
                    ?>
                    <div class="col-sm-6  col-md-4 col-lg-3 col-xxl-2 my-2">
                        <a href="prod-view.php?product=<?= $item['slug']; ?>">
                            <div class="card">
                                <img src="uploads/<?= $item['image']; ?>" class="card-img-top img-fluid" alt="..." />
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?= $item['name'] ?></h5>
                                    <p class="card-text">السعر : <span><?= $item['selling_price'] ?> </span></p>
                                    <a href="prod-view.php?product=<?= $item['slug']; ?>" class="Add-pruduct">
                                        <span> شراء</span>
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
            }
            else 
            {
            ?>
            <div class="text-center ">
                <h4 class="display-4 text-white">
                    <strong class="st-no">No Products Available</strong>  
                </h4>
            </div>

            <?php
            }

            ?> 
        </div>
    </div>
    <?php 
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
                            <h4 class="display-4 text-white"><strong class="st-wr">Something Went Wrong</strong></h4>
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
    <?php
}
include("categories/includes/footer.php");
?>