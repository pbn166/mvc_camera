<?php include 'incl/header.php' ;
      include 'incl/slider.php';
	//  include 'classes/temp.php';
	//  include 'helpers/format.php';
?>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Sản phẩm nổi bật</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
				<?php
					$product_feathered = $product -> getproduct_feathered();
					if($product_feathered) {
						while ($result = $product_feathered->fetch_assoc()){

						
					
				?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php"><img src="images/feature-pic1.png" alt="" /></a>
					<h2><?php echo $result['productName']?></h2>
					<p><?php echo $fm->textShorten($result['procduct_desc'],50) ?></p>
					 <p><span class="price"><?php echo $result['price'] ?></span></p>
				     <div class="button"><span><a href="details.php" class="details">Details</a></span></div>
				</div>
				<?php
						}
					}
				?>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php"><img src="images/new-pic1.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <p><span class="price">$403.66</span></p>
				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.php"><img src="images/new-pic2.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <p><span class="price">$621.75</span></p> 
				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.php"><img src="images/feature-pic2.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <p><span class="price">$428.02</span></p>
				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
				 <img src="images/new-pic3.jpg" alt="" />
					 <h2>Lorem Ipsum is simply </h2>					 
					 <p><span class="price">$457.88</span></p>

				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>
				</div>
			</div>
    </div>
 </div>
 <?php include 'incl/footer.php';?>
