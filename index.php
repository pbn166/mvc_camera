<?php include 'incl/header.php' ;
      include 'incl/slider.php';
	//  include 'classes/temp.php';
//	 include 'helpers/format.php';
?>
<?php
// b1: kết nối
$conn=mysqli_connect("localhost", "root", "", "mvc_camera");
// b2: khai báo ngôn ngữ
mysqli_query($conn, "SET NAMES 'utf8'");
?>

<?php
	$sql="SELECT*FROM tbl_product WHERE type=1 ORDER BY productId  LIMIT 0,9 ";
	$query=mysqli_query($conn, $sql);
	$rows=mysqli_num_rows($query);
//	$file_path ='admin/uploads';
	//$fm = new Format ;
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
					// $product_feathered = $product -> getproduct_feathered();
					// if($product_feathered) {
					// 	while ($result = $product_feathered->fetch_assoc()){

						$i=0;
						while($row=mysqli_fetch_array($query)){

							if($i==0){	
					
				?>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="details.php<?php echo $row['productId']?>"> </a>
            		 <img src="admin/uploads/ <?php echo $row['image']?>">
					<h2><?php echo $row['productName']?></h2>
					 <p>Giá: <span class="price"><?php echo number_format ($row['price']) ?>VND</span></p>
				     <div class="button"><span><a href="details.php" class="details">Details</a></span></div>
				</div>
				<?php
						}
					}
				?>
			</div>

			<!-- SAN PHAM MOI -->
			<?php
				if (isset($_GET['page'])) {
					$page = $_GET['page'];
				} else {
					$page = 1;
				}
				$row_per_page = 9;// Sl sản phẩm /trang
				$per_row = $page * $row_per_page - $row_per_page;

				$sql = "SELECT*FROM tbl_product ORDER BY productId DESC LIMIT $per_row, $row_per_page";
				$query = mysqli_query($conn, $sql);
				$rows = mysqli_num_rows($query);
			?>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Sản phẩm mới</h3>			
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">

			<?php
				$i = 0;
				while ($row = mysqli_fetch_array($query)) {
					if ($i == 0) { ?>


				<div class="grid_1_of_4 images_1_of_4">
				<!-- <div class="coupontooltip"> -->
				<a href="details.php<?php echo $row['productId']?>"> </a>
            		 <img src="admin/uploads/ <?php echo $row['image']?>">
					<h2><?php echo $row['productName']?></h2>
					 <p>Giá: <span class="price"><?php echo number_format ($row['price']) ?>VND</span></p>
				     <div class="button"><span><a href="details.php" class="details">Details</a></span></div>
				</div>
				<?php
						}
					}
				?>
			</div>
    </div>
 </div>
 <?php include 'incl/footer.php';?>
