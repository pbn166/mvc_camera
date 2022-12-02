<?php include 'incl/header.php' ;
     // include 'incl/slider.php';
?>


 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Đăng nhập</h3>
        	<p>Điền thông tin tài khoản bên dưới để đăng nhập.</p>
        	<form action="hello" method="get" id="member">
                	<input name="Domain" type="text" value="Username" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
                    <input name="Domain" type="password" value="Password" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                 </form>
                 <p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p>
                    <div class="buttons"><div><button class="grey">Sign In</button></div></div>
                    </div>
    	<div class="register_account">
    		<h3>Đăng ký tài khoản</h3>
    		<form>
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" value="Name" placeholder = "Nhập tên" >
							</div>
							
							<div>
							   <input type="text" value="City" placeholder = "Thành phố">
							</div>
<!-- 							
							<div>
								<input type="text" value="Zip-Code" placeholder = "Nhập số điện thoại">
							</div> -->
							<div>
								<input type="text" value="E-Mail" placeholder = "Nhập Email">
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" value="Address" placeholder = "Địa chỉ">
						</div>
		    		<div>
						<select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Select a Country</option>         
							<option value="AF">Hà Nội</option>
							<option value="AL">Hồ Chí Minh</option>
							<option value="DZ">Cần Thơ</option>
							<option value="AR">Hậu Giang</option>
							<option value="AM">Vũng Tàu</option>
							<option value="AW">Cà Mau</option>
							<option value="AU">Kiên Giang</option>
							<option value="AT">An Giang</option>
							<option value="AZ">Đồng Tháp</option>
							<option value="BS">Bạc Liêu</option>
							<option value="BH">Hà Giang</option>
							<option value="BD">Sóc Trăng</option>

		         </select>
				 </div>		        
	
		           <div>
		          <input type="text" value="Phone"placeholder = "Số điện thoại">
		          </div>
				  
				  <div>
					<input type="text" value="Password" placeholder = "Mật khẩu">
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><button class="grey">Tạo tài khoản</button></div></div>
		    <p class="terms">Kích vào tạo tài khoản và chấp nhận điều khoản. <a href="#">Terms &amp; Conditions</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
</div>

<?php include 'incl/footer.php';?>