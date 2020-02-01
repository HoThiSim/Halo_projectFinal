<?php

include '../class_modal/Home.classs.php';
include '../class_modal/User.lass.php';
class Account{
    public $account_id;
    public $account_name;
    public $account_password;
    public $user;
    public $mes;
    public $connection;


   function __construct($account_name,$account_password){
     session_start();
     $this-> login($account_name,$account_password);
     $this->user= new User($this->account_id);
     $_SESSION['account']=json_encode($this);
//      print_r($_SESSION);
     header('location: ../../view/home.php');
   }


 

   function login($name,$pass){
       require_once '../../database/config.php';
       $this->connection= new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
       $stm='SELECT * from account where account_name="'.$name.'" and account_password="'.$pass.'"';
       $check= $this->connection->query($stm)->fetch_all();
       $this->connection->close();
       if($check){
       $this->account_name=$check[0][1];
       $this->account_password=$check[0][2];
       $this->account_id=$check[0][0];
       
    }
    else{
           header('location: ../../view/introduct.php');
    }
   }


    function logout(){
           session_destroy();
           header('location: index.php ');
    }

 
  
   
 
}
?>