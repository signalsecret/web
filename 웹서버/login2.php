<?php  
    //ini_set('session.cookie_httponly',1); // httponly 옵션 활성화
    //ini_set('session.cookie_secure',1); // secure 옵션 활성화 // 이것때문에 바로 로그인 풀림
    session_start(); 
    session_regenerate_id(); // 해당 페이지를 시작할 때 마다 새로운 세션 id 발급
    $ip = $_SERVER['REMOTE_ADDR']
    ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>모의해킹 : 로그인</title>
    </head>
    <body>
        <h1>모의해킹</h1>
        <hr />
        <h2>로그인</h2>
        <?php if(!isset($_SESSION['id']) || !isset($_SESSION['name'])) {
              echo 'Session ID : ' . SESSION_id();
              echo '<br>';
              echo '사용자 IP 주소 : ' . $_SERVER['REMOTE_ADDR'];?>
         <form method="post" action="login_ok2.php">
            <p>ID : <input type="text" name="id" /></p>
            <p>PW : <input type="password" name="pw" /></p>
            <p><input type="hidden" name="user_ip" value="<? echo $ip ;?>" /></p>
            <p><input type="submit" value="로그인" /></p>
        </form>
        <?php } //elseif($_SESSION['ip'] != $_SERVER['REMOTE_ADDR']) {
                //    session_destroy();
                //    session_start();
                //echo "<script>window.alert('login fail');</script>";
		        //exit();
                //}
                else {
                    echo "<script>location.href='index2.php';</script>";
                 } ?> 
    </body>
</html>