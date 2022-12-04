<?php include 'incl/header.php' ;
        include_once 'config/config.php';
?>
<?php

if (isset($_POST['keyword'])) {
    $keyword = $_POST['keyword'];
    
}
$sql_pro = "SELECT * FROM tbl_product,tbl_category WHERE tbl_product.catid=tbl_category.catit AND tbl_product.productName LIKE '%".$keyword."%'";
$query_pro = mysqli_query($conn,$sql_pro);

?>
<div class="products">
    //<div id="search-result">Kết quả tìm kiếm với sản phẩm <span><?php echo $_POST['keyword']?></span></div>
    <?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
            <div class="product-list card-deck">
            
            <div class="product-item card text-center">
                <a href="index.php?proid=<?php echo $row['prd_id']; ?>"><img src="admin/uploads/<?php echo $row['image']; ?>"></a>
                <h4><a href="index.php?proid=<?php echo $row['prd_id']; ?>"><?php echo $row['productName']; ?></a></h4>
                <p>Giá Bán: <span><?php echo number_format($row['price']); ?>đ</span></p>
            </div>
           
    </div>
<?php  } ?>