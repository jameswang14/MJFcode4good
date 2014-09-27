

<?php
session_start();

include 'Action.php';
include 'AccountDAO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Action_Add.php that contains the logic for executing the Add action

class Action_Add implements Action {

    public function execute($request) {
        $perPage = 0;
        $count = 0;
        $start = 0;
        $dao = new AccountDAO();
        $username=$request->get("Name");
        $name=$request->get("Name");
        $email=$request->get("Email");
        $password=$request->get("Password");
        $address=$request->get("Address");
        $zip_code=$request->get("zip_code");
        $permission=$request->get("Permission");
        $location= $request->get("Location");
        $howfar=$request->get("HowFar");
        $typ=$request->get("TYP");
         $gender= $request->get("Gender");
         $dob=$request->get("DOB");
         $re=$request->get("R/E");
         $condition=$request->get("Condition");
         $symptoms=$request->get("symptoms");
        $dao->addAccountData($username, $name, $email, $password, $address, $zip_code, 
                $permission, $location, $howfar, $typ, $gender, $dob, $re, $condition,$$symptoms);
       
        header("Location: index.html");
    }

}    

