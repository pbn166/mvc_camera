<?php
   
    include '../lib/database.php';
    include '../helpers/format.php';
?>

<?php
class category
{   
    private $db;
    private $fm;
    public function __construct()
    {
        $this -> db= new Database();
        $this -> fm= new Format();
    }
    public function insert_category($catName)
    { 
        //Ktra hop he
        $catName = $this->fm->validation($catName);
        
        $catName = mysqli_real_escape_string($this->db->link,$catName);
       
        if(empty($catName)){
            $alert = "<span class='success'>Danh muc khong duoc de trong</span>";
           return $alert;
        } 
        else {
           $query = "INSERT INTO tbl_category(catName) VALUES('$catName')";
           $result = $this->db->insert($query);
           if($result){
            $alert = "<span class='success'>Them vao thanh cong</span>";
            return $alert;
           }else{
            $alert = "<span class='success'> Them vao khong thanh cong</span>";
            return $alert;
           }            
        }
    }
    //Sắp xếp theo giảm dần, thêm trước lên đầu
    public function show_category(){
        $query ="SELECT * FROM tbl_category order by catid desc";
        $result = $this->db->select($query);
        return $result;
    }
    //
    public function getcatbyId($id){
        $query ="SELECT * FROM tbl_category where catid = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function del_category($id){
        $query ="DELETE FROM tbl_category where catid = '$id'";
        $result = $this->db->delete($query);
        // // // if($result){
        // // //     $query = "UPDATE tbl_category SET catName= '$catName' WHERE catid='$id'";
        // // //     $result = $this->db->update($query);
            if($result){
             $alert = "<span class='success'>Xóa thành công</span>";
             return $alert;
            }else{
             $alert = "<span class='success'> Xóa không thành công </span>";
             return $alert;
            }            

        }
    
    public function update_category($catName,$id)
{
     //Ktra hop he
     $catName = $this->fm->validation($catName);        
     $catName = mysqli_real_escape_string($this->db->link,$catName);
     $id = mysqli_real_escape_string($this->db->link,$id);
     
     if(empty($catName)){
        $alert = "<span class='success'>Danh muc khong duoc de trong</span>";
       return $alert; 
    } 
    else {
       $query = "UPDATE tbl_category SET catName= '$catName' WHERE catid='$id'";
       $result = $this->db->update($query);
       if($result){
        $alert = "<span class='success'>Chỉnh sửa thành công</span>";
        return $alert;
       }else{
        $alert = "<span class='success'> Chỉnh sửa không thành công </span>";
        return $alert;
       }            
    }
}
}
//brand
class brand
{   
    private $db;
    private $fm;
    public function __construct()
    {
        $this -> db= new Database();
        $this -> fm= new Format();
    }
    public function insert_brand($brandName)
    { 
        //Ktra hop he
        $brandName = $this->fm->validation($brandName);
        
        $brandName = mysqli_real_escape_string($this->db->link,$brandName);
       
        if(empty($brandName)){
            $alert = "<span class='success'>Thương hiệu không được để trống</span>";
           return $alert;
        } 
        else {
           $query = "INSERT INTO tbl_brand(brandName) VALUES('$brandName')";
           $result = $this->db->insert($query);
           if($result){
            $alert = "<span class='success'>Thêm vào thành công</span>";
            return $alert;
           }else{
            $alert = "<span class='success'> Thêm vào không thành công, mời thử lại</span>";
            return $alert;
           }            
        }
    }
    //Sắp xếp theo giảm dần, thêm trước lên đầu
    public function show_brand(){
        $query ="SELECT * FROM tbl_brand order by brandid desc";
        $result = $this->db->select($query);
        return $result;
    }
    //
    public function getbrandbyId($id){
        $query ="SELECT * FROM tbl_brand where brandid = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function del_brand($id){
        $query ="DELETE FROM tbl_brand where brandid = '$id'";
        $result = $this->db->delete($query);
        // // // if($result){
        // // //     $query = "UPDATE tbl_category SET catName= '$catName' WHERE catid='$id'";
        // // //     $result = $this->db->update($query);
            if($result){
             $alert = "<span class='success'>Xóa thành công</span>";
             return $alert;
            }else{
             $alert = "<span class='success'> Xóa không thành công </span>";
             return $alert;
            }            

        }
    
    public function update_brand($brandName,$id)
{
     //Ktra hop he
     $brandName = $this->fm->validation($brandName);        
     $brandName = mysqli_real_escape_string($this->db->link,$brandName);
     $id = mysqli_real_escape_string($this->db->link,$id);
     
     if(empty($brandName)){
        $alert = "<span class='success'>Danh muc khong duoc de trong</span>";
       return $alert; 
    } 
    else {
       $query = "UPDATE tbl_brand SET brandName= '$brandName' WHERE brandid='$id'";
       $result = $this->db->update($query);
       if($result){
        $alert = "<span class='success'>Chỉnh sửa thành công</span>";
        return $alert;
       }else{
        $alert = "<span class='success'> Chỉnh sửa không thành công </span>";
        return $alert;
       }            
    }
}
}


class product
{   
    private $db;
    private $fm;
    public function __construct()
    {
        $this -> db= new Database();
        $this -> fm= new Format();
    }
    public function insert_product($data, $files)
    { 
                
        $productName = mysqli_real_escape_string($this->db->link,$data['productName']);
        $brand = mysqli_real_escape_string($this->db->link,$data['brand']);
        $category = mysqli_real_escape_string($this->db->link,$data['category']);
        $product_desc= mysqli_real_escape_string($this->db->link,$data['product_desc']);
        $price = mysqli_real_escape_string($this->db->link,$data['price']);
        $type = mysqli_real_escape_string($this->db->link,$data['type']);
        //kiem tra hinh anh
        $permited = array('jpg','jpeg','png','gif');
        $file_name =$_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_temp =$_FILES['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10). '.' .$file_ext;
        $uploaded_image = "uploads/" .$unique_image;

       
        if($productName=="" || $category=="" || $brand==""  || $product_desc=="" ||$type=="" || $price=="" ||  $file_name==""){
            $alert = "<span class='error'>Không được để trống</span>";
           return $alert;
        } 
        else {
            move_uploaded_file($file_temp, $uploaded_image);
           $query = "INSERT INTO tbl_product(productName,catid,brandid,product_desc,type,price,image) VALUES('$productName','$category','$brand','$product_desc','$type','$price','$unique_image')";
           $result = $this->db->insert($query);
           if($result){
            $alert = "<span class='success'>Thêm sản phẩm thành công</span>";
            return $alert;
           }else{
            $alert = "<span class='success'> Thêm sản phẩm khôngthành công</span>";
            return $alert;
           }            
        }
    }
   // Sắp xếp theo giảm dần, thêm trước lên đầu
    public function show_product(){
      
      $query = "
      SELECT tbl_product.* , tbl_category.catName, tbl_brand.brandName 
      FROM  tbl_product INNER JOIN tbl_category ON tbl_product.catid = tbl_category.catid
      INNER JOIN tbl_brand ON tbl_product.brandId = tbl_brand.brandId
      order by tbl_product.productId desc ";
      
        $result = $this->db->select($query);
        return $result;
    }

    
    public function getproductbyId($id){
        $query ="SELECT * FROM tbl_product where productId = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function del_product($id){
        $query ="DELETE FROM tbl_product where productId = '$id'";
        $result = $this->db->delete($query);
        // // // if($result){
        // // //     $query = "UPDATE tbl_category SET catName= '$catName' WHERE catid='$id'";
        // // //     $result = $this->db->update($query);
            if($result){
             $alert = "<span class='success'>Xóa thành công</span>";
             return $alert;
            }else{
             $alert = "<span class='error'> Xóa không thành công </span>";
             return $alert;
            }            

        }
    
    public function update_product($data,$file,$id)
{
    $productName = mysqli_real_escape_string($this->db->link,$data['productName']);
    $brand = mysqli_real_escape_string($this->db->link,$data['brand']);
    $category = mysqli_real_escape_string($this->db->link,$data['category']);
    $product_desc= mysqli_real_escape_string($this->db->link,$data['product_desc']);
    $price = mysqli_real_escape_string($this->db->link,$data['price']);
    $type = mysqli_real_escape_string($this->db->link,$data['type']);
    //kiem tra hinh anh
    $permited = array('jpg','jpeg','png','gif');
    $file_name =$_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_temp =$_FILES['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10). '.' .$file_ext;
    $uploaded_image = "uploads/" .$unique_image;
     
     
    if($productName=="" || $category=="" || $brand==""  || $product_desc=="" ||$type=="" || $price==""  ){
        $alert = "<span class='error'>Không được để trống</span>";
       return $alert;
    } 
    else {
        if(!empty($file_name)){
            //Neu nguoi dung lua chon anh
                if ($file_size > 204800)
        {
            $alert = "<span class='success'> Hình ảnh nên dưới 2MB! </span>";
            return $alert;
        }
        elseif 
        (in_array($file_ext, $permited) === false)
        {
            //echo "<span class = 'error'> Bạn có thể upload ảnh: ".implode(' , ',$permited),"</span>";
            $alert ="<span class = 'success'> Bạn chỉ có thể upload ảnh:-".implode(' , ',$permited)."</span>";
            return $alert ; 
        } 
        $query = "UPDATE tbl_product SET 
            
            productName= '$productName',
            brandid= '$brand',
            catid= '$category',
            type= '$type',
            price = '$price',
            image= '$unique_image',
            product_desc = '$product_desc'
            WHERE productId='$id'";
    }else {
        $query = "UPDATE tbl_product SET 
        productName= '$productName' ,
        brandid= '$brand' ,
        catid= '$category' ,
        type= '$type' ,
        price = '$price' ,
        
        product_desc = '$product_desc' 
        WHERE productId='$id'";
        }

      // $query = "UPDATE tbl_category SET catName= '$catName' WHERE catid='$id'";
       $result = $this->db->update($query);
       if($result){
        $alert = "<span class='success'>Chỉnh sửa thành công</span>";
        return $alert;
       }else{
        $alert = "<span class='error'> Chỉnh sửa không thành công </span>";
        return $alert;
       }            
    }
    }
 }

?>


