

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

class Action_Login implements Action {

    public function execute($request) {
        $perPage = 0;
        $count = 0;
        $start = 0;
        $dao = new AccountDAO();
        $username=$request->get("Name");
        $password=$request->get("Password");

        if($dao->checkPasswd($username, $password))
        {
            header("Location: index.html");
        }
       
        header("Location: index.html");
    }

}    



