<?php 

include('../middleware/adminMiddleware.php');


include('includes/header.php'); 



?>

<div class="container">
    <div class="raw">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white"> Orders 
                        <a href="order-history.php" class="btn btn-warning float-end">Order History</a>
                    </h4>
                    
                </div>
                <div class="card-body" id="product_table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Tracking No</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                    $orders = getAllOrders();

                                    if(mysqli_num_rows($orders) > 0)
                                    {
                                        foreach($orders as $order)
                                        {
                                            ?>
                                            
                                            <tr>
                                                <td><?=$order['id']?></td>
                                                <td><?=$order['name']?></td>
                                                <td><?=$order['tracking_no']?></td>
                                                <td><?=$order['total_price']?></td>
                                                <td><?=$order['created_at']?></td>
                                                <td>
                                                    <a href="view-order.php?t=<?=$order['tracking_no']?>" class="btn btn-primary">View Details</a>
                                                </td>
                                            </tr>
                                            
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            
                                            <tr>
                                                <td colspan="5">لا يوجد طلبات حتى الأن</td>
                                            </tr>
                                            
                                        <?php
                                    }
                                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
