<div class="department m-0">
    <div class="dep_title">
        <h2>الأكثر مبيعًا </h2>
    </div>
    <div class="blog m-0">
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <!-- elemets for looping  9 -> 21 -->
                <?php
                $trendingProducts = getAllTrending();

                if (mysqli_num_rows($trendingProducts) > 0)
                {
                    foreach ($trendingProducts as $item) {
                       ?>
                        <div class="swiper-slide txt_dec">
                            <a href="prod-view.php?product=<?= $item['slug']?>">
                                <div class="card">
                                    <img src="uploads/<?= $item['image'];?>" class="card-img-top img-fluid" alt="..." />
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><?= $item['name'];?></h5>
                                        <p class="card-text">السعر : <span><?= $item['selling_price'];?></span></p>
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