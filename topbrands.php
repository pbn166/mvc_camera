<?php include 'incl/header.php' ;
      include 'incl/slider.php';
?>

<?php
	//  $cat_id = $_GET['catid'];
	//  $cat_name = $_GET['catName'];
	//$id = $_GET['proid'];
	$sql =    "  SELECT tbl_product.* , tbl_category.catName, tbl_brand.brandName 
	FROM  tbl_product INNER JOIN tbl_category ON tbl_product.catid = tbl_category.catid
	INNER JOIN tbl_brand ON tbl_product.brandId = tbl_brand.brandId
	order by brandName='Nikon' desc ";
	//$sql="SELECT*FROM tbl_brand WHERE brandName='Nikon'  ";
	
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);

?>


 <div class="main">
 <div class="section group">
				<div class="cont-desc span_1_of_2">				
					<div class="grid images_3_of_2">
						<img src="admin/uploads/<?php echo $row['image'] ;?>">
					</div>
				<div class="desc span_3_of_2">
				<h2><?php echo $row['productName']?></h2>
					 			<p>Giá: <span class="price"><?php echo number_format ($row['price']) ?>VND</span></p><div class="price">
								<p>Danh mục: <span class="category"><?php echo $row['catName']?></span></p>
								<p>Thương hiệu:<span class="brand"><?php echo $row['brandName']?></span></p>
					</div>
				<div class="add-cart" href="classes/cart/cart.php?proid<?php echo $row['proid']; ?>"></div>
					<form action="classes/cart/cart.php?proid" method="post">
						<input type="number" class="buyfield" name="" value="1"/>
						<input type="submit" class="buysubmit" name="submit" value="Mua ngay"/>
					</form>				
				</div>
				
			</div>
			<div class="product-desc">
			<h2>Chi tiết sản phẩm</h2>
			<p> <?php echo $row['product_desc'];?></p>
	        
	    </div>
			
</div>
  
<?php include 'incl/footer.php';?>
