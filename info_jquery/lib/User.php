<?php

require_once __DIR__.'/db.php';
class User {
    
    private $db;
    public function __construct() {
        $this->db = new DBConnection();
    }
     
    public function InsertUser (array $user){
        
        return $this->db->execute("INSERT INTO info_p (name , email , phone) values ('".$user[0]."','".$user[1]."','".$user[2]."')'");
    }
    
    public function getUserById($userID){
        
        $ui = $this->db->execute("select * from info_p where id = ".$userID);  
        
        $data = [];
        if ($ui)
        {
            $data = $this->db->reshapeData($ui);
           
        }
        return $data;
    }
    
    public function listUsers(){
       $ui = $this->db->execute("select * from info_p ");  
        
        $data = [];
        if ($ui)
        {
            $data = $this->db->reshapeData($ui);
           
        }
        return $data;
        
    }
    
    public function editUser(array $old,array $new){
        $obj = new DB();
        $edit_user = $obj->execute("select * from info_p where name = ".$name);
        $stredit = "update info_p set ('".$old[0]."','".$old[1]."','".$old[2]."') valuse ('".$new[0]."','".$new[1]."','".$new[2]."')";
        $obj->execute($stredit);
      
    }
    
    public function deleteUser($user){
         $obj = new DB();
         $delet_user = $obj->Connect()->execute("delet from info_p where name = ".$user);
         
        
    }
   
    
}