<?php
session_start();
require_once 'conn_db.php';
require_once 'models/Member.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$data = [
  $user,
  $pass
];

$obj = new Member();
$rs = $obj->cekLogin($data);
if(!empty($rs)){
  $_SESSION['MEMBER'] = $rs;
  header('location:index.php');
}else{
  echo "<script>
          alert('username atau password salah');
          document.location.href = 'index.php'
        </script>";
}    