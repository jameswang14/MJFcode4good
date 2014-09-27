


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'Account.php';

class AccountDAO{
   
    
    private $_mysqli;
    
    function __construct() {        
    }

    function __destruct() {
    }

    private function getDBConnection() {
        if (!isset($_mysqli)) {
            $_mysqli = new mysqli("localhost", "root", "go4itguys", "trial_finder");
            if ($_mysqli->errno) {
                printf("Unable to connect: %s", $_mysqli->error);
                exit();
            }
        }
        
        return $_mysqli;
    }
    
    public function getAccountData() {
        $lst = array();
        $con = $this->getDBConnection();
        
        $result = $con->query("SELECT ID,Title,Quantity FROM truck ORDER BY ID");
        $i = 0;
        
        // loop and create new Objects. Store attributes in array of objects
        while ($row = $result->fetch_row()) {
            $rec = new Item($row[0], $row[1], $row[2]);
            $lst[$i++] = $rec;
        }
        
        return $lst;
    }
    
    public function addAccountData($username,$name,$email,$password,$address,
            $zip_code,$permission,$location,$howfar,$typ,$gender,$dob,$re,$condition,$symptoms) {
        $lst = array();
        $con = $this->getDBConnection();
        /*
         * INSERT INTO `account`(`id`, `username`, `email`, 
         * `password`, `address`, `zip_code`) VALUES ([value-1],[value-2],
         * [value-3],[value-4],[value-5],[value-6])
         * 
         * 
         */
         $result = $con->query("INSERT INTO account(username,name, email, password, address, zip_code,
             permission,location,howfar,typ,gender,dob,r/e,condition,symptoms) 
        VALUES('$username','$name','$email','$password','$address','$zip_code'"
                 . ",'$permission','$location','$howfar','$typ','$gender','$dob','$re','$condition','$symptoms');");
         
         
     
    }
    
    public function addQuickData($username,$email,$password,$permission,$howfar,$typ,$gender) {
        $lst = array();
        $con = $this->getDBConnection();
        /*
         * INSERT INTO `account`(`id`, `username`, `email`, 
         * `password`, `address`, `zip_code`) VALUES ([value-1],[value-2],
         * [value-3],[value-4],[value-5],[value-6])
         * 
         * 
         */
         $result = $con->query("INSERT INTO account(username, email, password, permission,howfar,typ,gender) 
        VALUES('$username','$email','$password','$permission','$howfar','$typ','$gender');");
         
         
     
    }
    
    
    public function checkPasswd($username,$password){
        // put code to access database
        $con = $this->getDBConnection();
        $result = $con->query("SELECT username, password FROM account where
         username='$username' AND password='$password'");
        
        while ($row = $result->fetch_row()) {
            $rec = new Account($row[0], $row[1]);
            $lst[$i++] = $rec;
        }
         
          if(sizeof($lst)>1){
          return false;
          }
          else{
              return true;
          }
         
    }
    
    public function displayTrial($xCoord,$yCoord,$details,$id){
        
        $lst = array();
        $con = $this->getDBConnection();
        
        $result = $con->query("SELECT title,details FROM trial ORDER BY id");
        $i = 0;        
        // loop and create new Task Objects. Store attributes in array of objects
        while ($row = $result->fetch_row()) {
            $rec = new Trial($row[0], $row[1]);
            $lst[$i++] = $rec;
        }
        
        return $lst;
        
    }
    
     
   


}

?>