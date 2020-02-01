<?php

if(isset($_POST['login'])){

  require '..\class_modal\Account.lass.php';
    //   require_once '../database/connection.php';
        $acName =$_POST['username'];
        $acPass =$_POST['pass'];
        $user= new Account($acName,$acPass);

}
?>
