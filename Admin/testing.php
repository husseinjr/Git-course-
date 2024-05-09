<?php 

include('includes/header.php'); 

include('../middleware/adminMiddleware.php'); 
    
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