<?php

session_start(); // 세션
include ("db.php"); // DB접속



$id = $_POST['id']; // 아이디
$pw = $_POST['pw']; // 패스워드
$user_ip = $_POST['user_ip'];
  
$query = "select * from users where id='$id' and pw='$pw'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);



if($id==$row['id'] && $pw==$row['pw']){ // id와 pw가 맞다면 login
   if(!isset($_SESSION['login_ok']) || $_SESSION['ip'] == $user_ip){
     $_SESSION['id']=$row['id'];
     $_SESSION['name']=$row['name'];
     $_SESSION['login_ok'] = True;
     $_SESSION['ip'] = $user_ip;
     echo "<script>location.href='login2.php';</script>";
}
else{ // id 또는 pw가 다르다면 login 폼으로

   echo "<script>window.alert('invalid username or password');</script>"; // 잘못된 아이디 또는 비빌번호 입니다
   echo "<script>location.href='login2.php';</script>";
   }
}
?>