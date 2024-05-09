<?php
include('functions/userfunctions.php');

include('cart-includes/header.php');

include('authenticate.php');
?>
<?php include('cart-includes/navbar.php')?>
<div class="py-5">
    <br>
    <div class="container">
        <div class="checkout-card text-center">
            <div class="row">
                <div class="container text-center mb-4">
                    <h1 class="display-4"> طلباتى <img src="img/svg/true.svg" alt="" class="true-img"></h1>
                </div>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-brdered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tracking No</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    $orders = getOrders();

                                    if(mysqli_num_rows($orders) > 0)
                                    {
                                        foreach($orders as $order)
                                        {
                                            ?>
                                            
                                            <tr>
                                                <td><?=$order['id']?></td>
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
    </div>
</div> 

<?php include('cart-includes/footer.php')?>
