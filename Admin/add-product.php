<?php 

include('../middleware/adminMiddleware.php'); 

include('includes/header.php'); 

?>

<div class="container">
    <div class="raw">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
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
                                                    <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
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
                            <div class="col-md-6">
                                <label class="mb-0" > Name </label>
                                <input type="text" name="name"  required placeholder="Enter Category Name" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0" > Slug </label>
                                <input type="text" name="slug" required placeholder="Enter Category Slug"  class="form-control mb-2">
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0" > Small Description </label>
                                <textarea name="small_description"  required rows="3" class="form-control mb-2" placeholder="Enter Small Description" ></textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0" > Description </label>
                                <textarea name="description"  rows="3" class="form-control mb-2" placeholder="Enter Description" ></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0" > Original Price </label>
                                <input type="text" name="original_price"  placeholder="Enter Original Price" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0" > Selling Price </label>
                                <input type="text" name="selling_price" required placeholder="Enter Selling Price"  class="form-control mb-2">
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0" >  Upload Image </label>
                                <input type="file" required name="image" class="form-control mb-2">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mb-0" > Quantity </label>
                                    <input type="number" name="qty" required placeholder="Enter Quantity"  class="form-control mb-2">
                                </div>
                                <div class="col-md-3">
                                    <label class="mb-0" > Status </label><br>
                                    <input type="checkbox" name="status" >
                                </div>
                                <div class="col-md-3">
                                    <label class="mb-0" > Trending </label><br>
                                    <input type="checkbox" name="trending" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0" > Meta title </label>
                                <input type="text" name="meta_title" required placeholder="Enter Meta Title" class="form-control mb-2">
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0" > Meta Description </label>
                                <textarea name="meta_description"  required  rows="3" class="form-control mb-2" placeholder="Enter Meta Description" ></textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0" > Meta Keywords </label>
                                <textarea name="meta_keywords" required rows="3" class="form-control mb-2" placeholder="Enter Meta Keywords" ></textarea>
                            </div>
                            
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="add_product_btn">save</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
