<?php include 'incl/header.php' ;
        include_once 'config/config.php';
?>
<?php
	$id = $_GET['proid'];
	$sql =    "  SELECT tbl_product.* , tbl_category.catName, tbl_brand.brandName 
	FROM  tbl_product INNER JOIN tbl_category ON tbl_product.catid = tbl_category.catid
	INNER JOIN tbl_brand ON tbl_product.brandId = tbl_brand.brandId
	order by tbl_product.productId desc ";
	
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
?>

 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="cont-desc span_1_of_2">				
					<div class="grid images_3_of_2">
						<img src="admin/uploads/<?php echo $row['image'] ;?>">
					</div>
				<div class="desc span_3_of_2">
				<h2><?php echo $row['productName']?></h2>
					 			<p>Giá: <span class="price"><?php echo number_format ($row['price']) ?>VND</span></p><div class="price">
								<p>Danh mục: <span class="category"><?php echo $row['productName']?></span></p>
								<p>Thương hiệu:<span class="brand"><?php echo $row['brandName']?></span></p>
					</div>
				<div class="add-cart">
					<form action="cart.php" method="post">
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
				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					<ul>
				      <li><a href="productbycat.php">Mobile Phones</a></li>
				      <li><a href="productbycat.php">Desktop</a></li>
				      <li><a href="productbycat.php">Laptop</a></li>
				      <li><a href="productbycat.php">Accessories</a></li>
				      <li><a href="productbycat.php#">Software</a></li>
					   <li><a href="productbycat.php">Sports & Fitness</a></li>
					   <li><a href="productbycat.php">Footwear</a></li>
					   <li><a href="productbycat.php">Jewellery</a></li>
					   <li><a href="productbycat.php">Clothing</a></li>
					   <li><a href="productbycat.php">Home Decor & Kitchen</a></li>
					   <li><a href="productbycat.php">Beauty & Healthcare</a></li>
					   <li><a href="productbycat.php">Toys, Kids & Babies</a></li>
    				</ul>
    	
 				</div>
 		</div>
 	</div>
	</div>

	<?php include 'incl/footer.php';?>