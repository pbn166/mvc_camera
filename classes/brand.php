<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/database.php');
    include_once ($filepath.'/../helpers/format.php');
?>

<?php
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
?>