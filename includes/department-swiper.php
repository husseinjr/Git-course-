<?php 
    $categories = getAllActive("categories");


    if(mysqli_num_rows($categories) > 0)
    {
        foreach($categories as $item)
        {
            
            $cid = $item['id'];
            $products = getProdByCategory($cid);


            if(mysqli_num_rows($products) > 0)
            {
            ?>
            <div class="department m-0">
                <div class="dep_title">
                    <h2 class="d-flex aligen-items-center"> <?= $item['name']?>  <img src="img/svg/true.svg" alt=""> </h2>
                    <a href="products.php?category=<?= $item['slug']?>" class="showmore px-3">مشاهده المزيد <i class="fa-solid fa-arrow-left "></i></a>
                </div>
                <div class="blog m-0">
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper ">
                    
                        <?php
                            foreach($products as $prod)
                            {
                                ?>
                                <div class="swiper-slide txt_dec">
                                    <a href="prod-view.php?product=<?= $prod['slug']; ?>">
                                        <div class="card">
                                            <img src="uploads/<?= $prod['image'];?>" class="card-img-top img-fluid" alt="..." />
                                            <div class="card-body text-center">
                                                <h5 class="card-title"><?= $prod['name'];?></h5>
                                                <p class="card-text">السعر : <span><?= $prod['selling_price'];?></span></p>
                                                <button class="Add-pruduct">
                                                    <span> شراء</span>
                                                </button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
            }
            ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <?php
        }
        

    }
?>