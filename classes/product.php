<?php
   
    include '../lib/database.php';
    include '../helpers/format.php';
?>

<?php
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
        //Ktra hop he
       // $catName = $this->fm->validation($catName);
        
        $productName = mysqli_real_escape_string($this->db->link,$data['productName']);
        $brand = mysqli_real_escape_string($this->db->link,$data['brand']);
        $category = mysqli_real_escape_string($this->db->link,$data['category']);
        $produc_desc= mysqli_real_escape_string($this->db->link,$data['product_desc']);
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
       
        if($productName=="" || $brand="" || $category="" || $produc_desc="" || $price="" || $type="" || $file_name=""){
            $alert = "<span class='success'>Không được để trống</span>";
           return $alert;
        } 
        else {
            move_uploaded_file($file_temp, $uploaded_image);
           $query = "INSERT INTO tbl_product(productName,brandId,catid,product_desc,price,type,image) VALUES('$productName','$brand','$category','$product_desc','$price','$type','$unique_image')";
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
?>