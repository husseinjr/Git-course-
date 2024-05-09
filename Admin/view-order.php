<?php
include('../middleware/adminMiddleware.php');


include('includes/header.php'); 



if(isset($_GET['t']))
{
    $tracking_no = $_GET['t'];
    $orderdata = checkTrackingNoValid($tracking_no);

    if(mysqli_num_rows($orderdata) < 0)
    {
        ?>
            <h4>Something Went Wrong</h4>
        <?php
        die();
    }
}
else
{
    ?>
    <h4>Something Went Wrong</h4>
    <?php
    die();
}
$data = mysqli_fetch_array($orderdata);
?>

<div class="py-5">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="checkout-card ">

                    <div class="card-header text-white mt-3 mb-3 bg-primary fs-2 text-center">
                        View Order
                    </div>
                    <div class="card-body text-center">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Order Details</h4>
                                <hr>
                                <table class="table table-brdered table-striped">
                                    <thead>
                                        <tr>
                                            <th colspan="2">المنتج</th>
                                            <th>السعر</th>
                                            <th>الكمية</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            
                                            $order_query ="SELECT o.id AS oid,o.tracking_no, o.user_id, oi.*, oi.qty as orderqty, p.* FROM orders o, order_items oi, products p  WHERE oi.order_id=o.id AND p.id=oi.prod_id
                                            AND o.tracking_no ='$tracking_no'  ";
                                            
                                            $order_query_run = mysqli_query( $con , $order_query );

                                            if(mysqli_num_rows($order_query_run) > 0 )
                                            {
                                                foreach($order_query_run as $item ) {
                                                    ?>
                                                        <tr>
                                                            <td class="align-middle"><img src="../uploads/<?=$item['image']?>" width="50px" height="50px" alt="<?=$item['name']?>"></td>
                                                            <td><?=$item['name']?></td>
                                                            <td class="align-middle"><?=$item['price']?></td>
                                                            <td class="align-middle fw-bold"> x <?=$item['orderqty']?></td>
                                                        </tr>        
                                                    <?php
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <hr>
                                <div class="row">
                                    <h5>Total price : <span><?= $data['total_price']?>EGP</span> </h5>
                                </div>
                                
                                <hr>
                                <label class="fw-bold" >Payment Mode</label>
                                <div class="border p-1 mb-3">
                                    <?=$data['payment_mode']?>
                                </div>
                                <label class="fw-bold" >Status</label>
                                <div class="mb-3">
                                    <form action="code.php" method="POST">
                                        <input type="hidden" name="tracking_no" value="<?=$data['tracking_no']?>">
                                        <select name="order_status" class="form-select">
                                            <option value="0" <?= $data['status'] == 0?"selected":"" ?>>قيد المعالجه</option>
                                            <option value="1" <?= $data['status'] == 1?"selected":"" ?>>تم التسليم</option>
                                            <option value="2" <?= $data['status'] == 2?"selected":"" ?>>تم الغاء الطلب</option>
                                        </select>
                                        <button type="submit" name="update_order_btn" class="btn btn-primary mt-3">Update</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Delivary Details</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label class="fw-bold">Name</label>
                                        <div class="border p-1">
                                            <?=$data['name']?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label class="fw-bold">E-mail</label>
                                        <div class="border p-1">
                                            <?=$data['email']?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label class="fw-bold">Phone</label>
                                        <div class="border p-1">
                                            <?=$data['phone']?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label class="fw-bold">Tracking No.</label>
                                        <div class="border p-1">
                                            <?=$data['tracking_no']?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label class="fw-bold">Address</label>
                                        <div class="border p-1">
                                            <?=$data['address']?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label class="fw-bold"> ZIP Code</label>
                                        <div class="border p-1">
                                            <?=$data['pincode']?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <br>
                <!-- <div class="mt-3">
                    <a href="my-order.php" class="btn btn-warning"><i class="fa fa-reply"></i>عودة</a>
                </div> -->
            </div>
        </div>
    </div>
</div> 

<?php include('includes/footer.php'); ?>