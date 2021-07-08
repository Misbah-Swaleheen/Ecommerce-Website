<?php include('main.php');
    $pid = $_GET['pid'];
    $price = $_GET['price'];
    $data = $obj->sel_pro_by_proid($pid);
  
   
    if (isset($_SESSION['cart'][$pid])) {

        # code...
        if( $_GET['addname'] == 'plus' && ( $_SESSION['cart'][$pid]['qty'] < $data[0]['p_stock'])){
        $_SESSION['cart'][$pid]['qty'] = $_SESSION['cart'][$pid]['qty'] +1;
        $_SESSION['cart'][$pid]['price'] = $_SESSION['cart'][$pid]['price'] + $price;
        }
        elseif($_GET['addname'] == 'minus'){
            $_SESSION['cart'][$pid]['qty'] = $_SESSION['cart'][$pid]['qty'] -1;
            $_SESSION['cart'][$pid]['price'] = $_SESSION['cart'][$pid]['price'] - $price;
        }
    }else {
        # code...
    $_SESSION['cart'][$pid] = array('qty'=>1,'price' => $price);

    }
    header('location:'.$_SERVER['HTTP_REFERER']);

?>