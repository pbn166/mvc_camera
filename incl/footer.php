</div>
   <div class="footer">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Thông tin</h4>
						<ul>
						<li><a href="#">Về chúng tôi</a></li>
						<li><a href="#">Dịch vụ khách hàng</a></li>
						<li><a href="#">Đặt hàng và trở lại</a></li>
						<li><a href="#"><span>Liên hệ</span></a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Vì sao nên mua hàng ở chúng tôi</h4>
						<ul>
						
						<li><a href="#">Chính sách dịch vụ</a></li>
						<li><a href="contact.php"><span>Site Map</span></a></li>
						<li><a href="preview.php"><span>Diều khoản</span></a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Tài khoản</h4>
						<ul>
							<li><a href="contact.php">Đăng nhập</a></li>
							<li><a href="index.php">Xem giỏ hàng</a></li>
							<li><a href="#">Kiểm tra đơn đặt</a></li>
							<li><a href="faq.php">Giúp đỡ</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Liên hệ</h4>
						<ul>
							<li><span>+84-01713458599</span></li>
							<li><span>+84-01813458552</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li class="facebook"><a href="#" target="_blank"> </a></li>
							      <li class="twitter"><a href="#" target="_blank"> </a></li>
							      <li class="googleplus"><a href="#" target="_blank"> </a></li>
							      <li class="contact"><a href="#" target="_blank"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			<div class="copy_right">
				<p>Digital Camera Pahn &amp; All rights Reseverd </p>
		   </div>
     </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
</body>
    </html>
