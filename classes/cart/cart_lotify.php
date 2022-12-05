<a class="mt-4 mr-2" href="cart.php">Giỏ hàng</a><span class="mt-3">
    <?php
    if(isset($Session['cart'])){
        $totals=0;
        if (isset($_POST['qtt'])) {
            $cart=$_POST['qtt'];
        }
        else{
            $cart=$Session['cart'];
        }
        foreach($cart as $proid=>$qtt){
            $totals+=$qtt;
        }
        echo $totals;
    }
    else{
        echo 0;
    }
    ?>
</span>
