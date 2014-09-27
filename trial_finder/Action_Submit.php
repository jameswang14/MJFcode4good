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

class Action_Submit implements Action {

    public function execute($request) {
        $perPage = 0;
        $count = 0;
        $start = 0;
        $dao = new AccountDAO();
        $username=$request->get("Name");
        $email=$request->get("Email");
        $password=$request->get("Password");
        $permission=$request->get("Permission");
        $howfar=$request->get("HowFar");
        $typ=$request->get("TYP");
         $gender= $request->get("Gender");
         

         $dao->addQuickData($username, $email, $password, $permission, $howfar, $typ, $gender);
        /*
         * 
         * addQuickData($username,$email,$password,$permission,$howfar,$typ,$gender)
         * 
         * 
         *  VALUES('$username','$name','$email','$password','$address','$zip_code'"
                 . ",'$permission','$location','$howfar','$typ','$gender','$dob','$re','$condition');");
         * 
         */

       
        header("Location: index.html");
    }

}    