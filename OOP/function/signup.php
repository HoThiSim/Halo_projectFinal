<?php
if (isset($_POST['signup'])) {

    require_once '../database/config.php';

    $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    $Sname = $_POST['Sname'];
    $Sgender = $_POST['Sgender'];
    $Sphone = $_POST['Sphone'];
    $Sdob = $_POST['Sdob'];
    $Saddress = $_POST['Saddress'];
    $Susername = $_POST['Susername'];
    $Spassword = $_POST['Spassword'];
    $Simage = basename($_POST['imageInsert']);

    $stm = 'INSERT INTO account(account_name,account_password) values("' . $Susername . '","' . $Spassword . '")';
    $connection->query($stm);
    $id = count($connection->query('SELECT account_id from account')->fetch_all());

    $stm2 = 'INSERT  INTO user(user_name,user_dob,user_gender,user_phone,user_address,account_id,user_avatar)
           values("' . $Sname . '","' . $Sdob . '","' . $Sgender . '","' . $Sphone . '","' . $Saddress . '",' . $id . ',"' . $Simage . '")';

    if ($connection->query($stm2)) {
        header('location: ../index.php');
    };
}
