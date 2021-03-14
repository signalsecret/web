<?php
session_cache_expire(5); 
session_start();
echo session_cache_expire();
?>

<html>
<head>
        <meta charset="utf-8" />
        <title>모의해킹 : 로그인</title>
    </head>
<body>
<?php 
if($_SESSION['login_ok']!==null){
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    echo 'Session ID : ' . SESSION_id();
    echo '<br>';
    echo '사용자 IP 주소 : ' . $_SERVER['REMOTE_ADDR'];
    echo '<br>';
    echo "<p><strong>$name</strong>($id)님 환영합니다. ";
    echo '<br>';
    echo "<a href=\"logout2.php\">[로그아웃]</a></p>";
    echo "<a href=\"list2.php\">[저장XSS 게시판]</a></p>";
    echo "<a href=\"xss2.php\">[반사XSS 게시판]</a></p>";     
} 
else {
   echo "<script>location.href='login2.php';</script>";
}                      
?> 
</body>
</html>
