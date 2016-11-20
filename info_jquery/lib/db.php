<?php
class DBConnection {
    private $conn;
    
    public function __construct() {
        $this->Connect();
    }


    public function Connect(){
        //get the connection vars from config
        $this->conn = mysqli_connect('127.0.0.1','root','root','fetchr');
        
        if ($this->conn->connect_errno) {
            printf("Connect failed: %s\n", $this->conn->connect_error);
            exit();
        }

    }
    
    public function execute($command)
    {
        try {
            $data =  mysqli_query($this->conn, $command);
        } catch (Exception $ex) {
        }
        return $data;
    }
    
    //
    public function reshapeData($result) {
        $data = [];
        while ($row = $result->fetch_Array())
            $data[] = $row;
       mysqli_close($this->conn);
        return $data ;
    }
    
}