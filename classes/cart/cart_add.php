<?php   
    include '../../lib/session.php';
    Session::init();
    ?>
<?php

$proid=$_GET['proid'];
if(isset($Session['cart'][$proid])){
    $Session['cart'][$proid]++;
}
else{
    $Session['cart'][$proid]=1;
}
header('location:cart_lotify.php?page_layout=cart&giohang=1')
?>