<script>
    function buyNow() {
        document.getElementById("buy-now").submit()
    }
</script>
<?php
	
if (isset($Session['cart'])) {
    if (isset($_POST['sbm'])) {
        foreach ($_POST['qtt'] as $proid => $qtt) {
            $Session['cart'][$proid] = $qtt;
        }
    }
    $arr_id = array();
    foreach ($Session['cart'] as $proid => $qtt) {
        $arr_id[] = $proid;
    }
    $str_id = implode(" ,", $arr_id);
    $sql = "SELECT*FROM tbl_product WHERE productId IN($str_id)";
    $query = mysqli_query($conn, $sql);
?>
    <!--	Cart	-->
    <div id="my-cart">
        <div class="row">
            <div class="cart-nav-item col-lg-7 col-md-7 col-sm-12">Thông tin sản phẩm</div>
            <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12">Số Lượng</div>
            <div class="cart-nav-item col-lg-3 col-md-3 col-sm-12">Thành Tiền</div>
        </div>
        <form method="post">
            <?php
            $total_price_all = 0;
            while ($row = mysqli_fetch_array($query)) {
                $total_price = $Session['cart'][$row['proid']] * $row['price'];
                $total_price_all += $total_price;
            ?>
                <div class="cart-item row">

                    <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                        <img src="admin/uploads/<?php echo $row['image']; ?>">
                        <h4><?php echo $row['productName']; ?></h4>
                    </div>
                    <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                        <h4><?php echo number_format($row['price']); ?>đ</h4>
                    </div>
                    <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                        <input name="qtt[<?php echo $row['productId']; ?>]" type="number" id="quantity" class="form-control form-blue quantity" value=<?php echo $Session['cart'][$row['productId']]; ?> min="1">
                    </div>
                    <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b><?php echo number_format($total_price); ?>đ</b><a href="classes/cart/cart_dell.php?proid=<?php echo $row['productId']; ?>">Xóa</a></div>

                </div>
            <?php } ?>
            <div class="row">
                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                    <button id="update-cart" class="btn btn-success" type="submit" name="sbm">Cập nhật giỏ hàng</button>
                </div>
                <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b>Tổng cộng:</b></div>
                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b><?php echo  number_format($total_price_all); ?>đ</b></div>
            </div>
        </form>

    </div>
    <!--	End Cart	-->
    <?php
    if (isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["mail"]) && isset($_POST["add"])) {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["mail"];
        $Diachi = $_POST["Diachi"];

        $str_body = '';
        $str_body .= '
        <p>
            <b>Khách hàng:</b> ' . $name . '<br>
            <b>Điện thoại:</b> ' . $phone . '<br>
            <b>Địa chỉ:</b> ' . $Diachi . '<br>
        </p>
        ';
        $str_body .= '
        <table border="1" cellspacing="0" cellpadding="10" bordercolor="#305eb3" width="100%">
        <tr bgcolor="#305eb3">
            <td width="50%"><b>
                    <font color="#FFFFFF">Sản phẩm</font>
                </b></td>
            <td width="50%"><b>
                    <font color="#FFFFFF">Đơn Giá</font>
            </b></td>
            <td width="10%"><b>
                    <font color="#FFFFFF">Số lượng</font>
                </b></td>
            <td width="20%"><b>
                    <font color="#FFFFFF">Tổng tiền</font>
                </b></td>
        </tr>
        ';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
            $total_price = $Session['cart'][$row['productId']] * $row['price'];
            $str_body .= '
            <tr>
                <td width="50%">' . $row["productName"] . '</td>
                <td width="10%">' . $Session["cart"][$row["proid"]] . '</td>
                <td width="20%">' . $total_price . ' .000đ</td>
            </tr>
            ';
        }
        $str_body .= '
        <tr>
        <td colspan="2" width="70%"></td>
        <td width="20%"><b>
                <font color="#FF0000">' . $total_price_all . ' .000đ</font>
            </b></td>
        </tr>
        </table>
        
        ';
        $str_body .= '
        <p>
            Cám ơn quý khách đã mua hàng tại Shop của chúng tôi, bộ phận giao hàng sẽ liên hệ với quý khách để xác nhận sau 5 phút kể từ khi đặt hàng thành công và chuyển hàng đến quý khách chậm nhất sau 24 tiếng.
        </p>
        ';
    }
    ?>
    <div id="customer">
        <form id="buy-now" method="post">
            <div class="row">

                <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                    <input placeholder="Họ và tên (bắt buộc)" type="text" name="name" class="form-control" required>
                </div>
                <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                    <input placeholder="Số điện thoại (bắt buộc)" type="text" name="phone" class="form-control" required>
                </div>
                <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                    <input placeholder="Email (bắt buộc)" type="text" name="mail" class="form-control" required>
                </div>
                <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                    <input placeholder="Địa chỉ nhà riêng hoặc cơ quan (bắt buộc)" type="text" name="Diachi" class="form-control" required>
                </div>

            </div>
            <div class="row">
                <div class="by-now col-lg-6 col-md-6 col-sm-12">
                    <a onclick="buyNow()" href="#">
                        <b>Đặt hàng ngay</b>
                        <span>Giao hàng tận nơi trong ngày</span>
                    </a>
                </div>
                <div class="by-now col-lg-6 col-md-6 col-sm-12">
                    <a href="#">
                        <b>Tư Vấn Online</b>
                        <span>Vui lòng call (+84) 0329731204</span>
                    </a>
                </div>
            </div>
        </form>
    </div>
    
<?php } else { ?>
    <div class="alert alert-danger mt-3">Giỏ hàng hong có sản phẩm nào!!!</div>
<?php }
?>