<?php 
    include('header.php'); 
?>
  <!-- main-area -->
  <main>

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg03.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Cart Page</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- cart-area -->
<div class="cart-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cart-wrapper">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail"></th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">QUANTITY</th>
                                    <th class="product-subtotal">SUBTOTAL</th>
                                    <th class="product-delete"></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $total =0;
                               foreach ($_SESSION['cart'] as $key => $value) {
                                 
                                    foreach ($obj->sel_pro_by_proid($key) as  $row) {
                                        # code...
                                        $img = json_decode($row['p_img']);  
                              
                            ?>
                                <tr>
                                    <td class="product-thumbnail"><a href="shop-details.html"><img src="<?php echo '../aadmin panel/assets/images/products/'.$img[0]?>" alt=""></a></td>
                                    <td class="product-name">
                                        <h4><a href="shop-details.php?product=<?php echo $row['id']?>"><?php 
                                            echo $row['name']; 
                                        ?></a></h4>
                                    </td>
                                    <td class="product-price"><?php 
                                        echo number_format( $row['p_sale_price'] );
                                    ?></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
       <form  method="get"  >
         <input type="number" class="in-num" value="<?php echo $value['qty']; ?>" readonly="">
                  <div class="qtybutton-box">
<?php
echo('
<a href="addtocart.php?pid='.$row['id'].'&price='.$row['p_sale_price'].'&addname=plus" class="plus">
                               <img src="img/icon/plus.png" alt="" width="10px" height="10px" ></a>
');
?>  
                           
                                                    <a href="addtocart.php?pid=<?php echo $row['id']; ?>&price=<?php echo $row['p_sale_price']; ?>&addname=minus" class="d-block minus dis"><img src="img/icon/minus.png" alt=""  width="10px" height="10px"></a>
                                    </div>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span><?php echo number_format($value['price']) ; ?></span></td>
                                    <td class="product-delete"><a href="removecart.php?pid=<?php echo $row['id']?>"><i class="flaticon-trash"></i></a></td>
                                </tr>
                                <?php 
                                } 
                                $total+= $value['price'] ;
                               }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="shop-cart-bottom mt-20">
                        <div class="cart-coupon">
                            <form action="#">
                                <input type="text" placeholder="Enter Coupon Code...">
                                <button class="btn">Apply Coupon</button>
                            </form>
                        </div>
                        <div class="continue-shopping">
                            <a href="shop.html" class="btn">update shopping</a>
                        </div>
                    </div>
                </div>
                <div class="cart-total pt-95">
                    <h3 class="title">CART TOTALS</h3>
                    <div class="shop-cart-widget">
                        <form action="#">
                            <ul>
                                <li class="sub-total"><span>SUBTOTAL</span> $ 136.00</li>
                                <li>
                                    <span>SHIPPING</span>
                                    <div class="shop-check-wrap">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">FLAT RATE: $15</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">FREE SHIPPING</label>
                                        </div>
                                        <a href="#" class="calculate">Calculate shipping</a>
                                    </div>
                                </li>
                                <li class="cart-total-amount"><span>TOTAL</span> <span class="amount"><?php echo number_format($total)?></span></li>
                            </ul>
                            <a href="checkout.html" class="btn">PROCEED TO CHECKOUT</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-area-end -->

</main>
<?php 
    include('footer.php'); 
?>