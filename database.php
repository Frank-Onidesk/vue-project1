<?php 
error_reporting(E_ALL);


class db{
    public  $_conn; 
    
    
    function __construct()
   {
    
       $this->_conn = mysqli_connect(Host, User, Passw) or die(mysqli_error());
       mysqli_select_db($this->_conn, Database);
        
    }

    public function getConnection() : object{
        return $this->_conn;
    }
    

    public function _close(){
        return mysqli_close($this->_conn);
        unset($this->_conn);
    }
}

