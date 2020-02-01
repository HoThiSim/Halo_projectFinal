<?php


class User {
   public $user_id ;
   public $user_name ;
   public $user_dob ;
   public $user_gender ;
   public $user_phone ;
   public $user_address;
   public $user_avartar;
   public $connection;
   
  function __construct($id)
  {
    require_once '../../database/config.php';
   $this->connection= new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   $stm='SELECT * from user where account_id='.$id;
   $checkU=$this->connection->query($stm)->fetch_all();
   $this->connection->close();
   if($checkU){
      $this->user_id=$checkU[0][0];
      $this->user_name=$checkU[0][1];
      $this->user_dob=$checkU[0][2];
      $this->user_gender=$checkU[0][3];
      $this->user_phone=$checkU[0][4];
      $this->user_address=$checkU[0][5];
      $this->user_avartar=$checkU[0][7];
   }
   else{
        echo "err: can't load your info";
   }
  }
}
?>