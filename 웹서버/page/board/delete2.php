<?php
	include $_SERVER['DOCUMENT_ROOT']."/db2.php";
	
	$bno = $_GET['idx'];
	$sql = mq("delete from board where idx='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/list2.php" />