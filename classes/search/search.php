
<?php
	//  $cat_id = $_GET['catid'];
	//  $cat_name = $_GET['catName'];
	//$id = $_GET['proid'];
	$sql =    "  SELECT tbl_product.* , tbl_category.catName, tbl_brand.brandName 
	FROM  tbl_product INNER JOIN tbl_category ON tbl_product.catid = tbl_category.catid
	INNER JOIN tbl_brand ON tbl_product.brandId = tbl_brand.brandId
	order by tbl_product.productId desc ";	
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
?>

<div class="products">
    <div id="search-result">Kết quả tìm kiếm với sản phẩm <span><?php echo $keyword ?></span></div>
    <div class="section group">
			

				<?php
                if (isset($_POST['keyword'])) {
                    $keyword = $_POST['keyword'];
                    
                }else {
                    $keyword = $_GET['keyword'];
                }
                if($keyword==null){
                    header('location: index.php');
                }
					
						$i=0;
						while($row=mysqli_fetch_array($query)){

							if($i==0){	
					
				?>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="details.php<?php echo $row['productId']?>"> </a>
            		<img src="admin/uploads/<?php echo $row['image']?>">
					<h2><?php echo $row['productName']?></h2>
					 <p>Giá: <span class="price"><?php echo number_format ($row['price']) ?>VND</span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $row['productId']?>" class="details">Details</a></span></div>
				</div>
				<?php
						}
					}
				?>
			</div>
</div>
<!--	End List Product	-->
<?php if ($toltal_row > 0) { ?>
    <div id="pagination">
        <ul class="pagination">
            <?php
            echo $list_page;
            ?>
        </ul>
    </div>
<?php  } ?>