<?php
   
    include '../lib/database.php';
    include '../helpers/format.php';
?>

<?php
class cart
{   
    private $db;
    private $fm;
    public function __construct()
    {
        $this -> db= new Database();
        $this -> fm= new Format();
    }
    
}
?>