<?php

include $_SERVER['DOCUMENT_ROOT']."/db2.php";
$date = date('Y-m-d');
$userpw = $_POST['pw'];
$sql = mq("insert into board(name,pw,title,content,date) values('".$_POST['name']."','".$userpw."','".$_POST['title']."','".$_POST['content']."','".$date."')"); ?>
<script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/list2.php" />