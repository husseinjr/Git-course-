<?php 

include('../middleware/adminMiddleware.php'); 

include('includes/header.php'); 

?>

<div class="container">
    <div class="raw">
        <div class="col-md-12">
            <?php 
            if(isset($_GET['id']))
            {
                 $id = $_GET['id'];
                $product = getById("products", $id );

                if(mysqli_num_rows($product) > 0)
                {
                    $data = mysqli_fetch_array($product);
                ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for=""> Select Category </label>
                                        <select name="category_id" required class="form-select mb-2" >
                                            <option selected> Select Category </option>
                                            <?php 
                                                $categories = getAll("categories");

                                                if(mysqli_num_rows($categories) > 0)
                                                {
                                                    foreach ($categories as $item) {
                                                        ?>                                            
                                                            <option value="<?= $item['id']; ?>" <?= $data['category_id'] == $item['id']?'selected':'' ?> ><?= $item['name']; ?></option>
                                                        <?php
                                                    }
                                                }
                                                else
                                                {
                                                    echo "No Category Available";
                                                }
                                                
                                            ?>
                                        </select>
                                    </div>
                                    <input type="hidden" name="product_id" value="<?= $data['id']?>">
                                    <div class="col-md-6">
                                        <label class="mb-0" > Name </label>
                                        <input type="text" name="name" value="<?= $data['name']?>"  required placeholder="Enter Category Name" class="form-control mb-2">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-0" > Slug </label>
                                        <input type="text" name="slug" value="<?= $data['slug']?>" required placeholder="Enter Category Slug"  class="form-control mb-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mb-0" > Small Description </label>
                                        <textarea name="small_description"  required rows="3" class="form-control mb-2" placeholder="Enter Small Description" ><?= $data['small_description']?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mb-0" > Description </label>
                                        <textarea name="description"  required rows="3" class="form-control mb-2" placeholder="Enter Description" ><?= $data['description']?></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-0" > Original Price </label>
                                        <input type="text" name="original_price" value="<?= $data['original_price']?>" required placeholder="Enter Original Price" class="form-control mb-2">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-0" > Selling Price </label>
                                        <input type="text" name="selling_price" value="<?= $data['selling_price']?>" required placeholder="Enter Selling Price"  class="form-control mb-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mb-0" >  Upload Image </label>
                                        <input type="hidden" name="old_image" value="<?= $data['image'];?>">
                                        <input type="file" name="image"  class="form-control mb-2">
                                        <label for="">  Current Image </label>
                                        <img src="../uploads/<?= $data['image']?>" alt="" height="50px" width="50px" class="current-img">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-0" > Quantity </label>
                                            <input type="number" name="qty" value="<?= $data['qty']?>" placeholder="Enter Quantity" required class="form-control mb-2">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="mb-0" > Status </label><br>
                                            <input type="checkbox" name="status" <?= $data['status']? "checked":"" ?> >
                                        </div>
                                        <div class="col-md-3">
                                            <label class="mb-0" > Trending </label><br>
                                            <input type="checkbox" name="trending" <?= $data['trending']? "checked":"" ?> >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mb-0" > Meta title </label>
                                        <input type="text" name="meta_title" value="<?= $data['meta_title']?>" placeholder="Enter Meta Title" required class="form-control mb-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mb-0" > Meta Description </label>
                                        <textarea name="meta_description"   rows="3" class="form-control mb-2" required placeholder="Enter Meta Description" ><?= $data['meta_description']?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mb-0" > Meta Keywords </label>
                                        <textarea name="meta_keywords"   rows="3" class="form-control mb-2" required placeholder="Enter Meta Keywords" ><?= $data['meta_keywords']?></textarea>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" name="update_product_btn">Update</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                <?php
                }
                else
                {
                    echo "product not found for given id";
                }
            }
            else
            {
                echo "id is missing from the url";
            }
            ?>                            
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
