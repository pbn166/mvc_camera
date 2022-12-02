<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/database.php');
    include_once ($filepath.'/../helpers/format.php');
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
?>