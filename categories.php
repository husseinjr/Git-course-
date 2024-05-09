<?php

include("functions/userfunctions.php") ;

include("categories/includes/header.php");

include("categories/includes/navbar.php");

?>

<div class="py-5">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container text-center mb-4">
                    <h1 class="display-4"> الأقسام <img src="img/svg/true.svg" alt="" class="true-img"></h1>
                </div>
                <hr>
                <div class="row">
                    <?php 
                    $categories = getAllActive("categories");


                    if(mysqli_num_rows($categories) > 0)
                    {
                        foreach($categories as $item)
                        {
                            ?>
                            <div class="col-md-3 mb-2">
                                <a href="products.php?category=<?= $item['slug']?>">
                                    <div class="department-card">
                                        <img src="uploads/<?= $item['image']; ?>" alt="Department Image">
                                        <div class="department-name"><?= $item['name'] ?></div>
                                    </div>  
                                </a>
                            </div>
                             <!-- 
                                <div class="card shadow">
                                    <div class="card-body category-card" >
                                        <img src="uploads/" alt="Category Image" class="w-100">
                                        <h2 class="text-center">Department Name</h2>
                                    </div>
                                </div> -->
                            <?php

                        }
                    }
                    else 
                    {
                        echo "No Category Available";
                    }

                    ?> 
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("categories/includes/footer.php") ?>
