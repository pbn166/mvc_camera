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
    public function show_category(){
        $query ="SELECT * FROM tbl_category order by catid desc";
        $result = $this->db->select($query);
        return $result;
    }

}
?>