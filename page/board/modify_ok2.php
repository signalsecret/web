<?php
include $_SERVER['DOCUMENT_ROOT']."/db2.php";

$bno = $_POST['idx'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$sql = mq("update board set name='".$_POST['name']."',pw='".$userpw."',title='".$_POST['title']."',content='".$_POST['content']."' where idx='".$bno."'"); ?>
?>
<script type="text/javascript">alert("수정되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/page/board/read2.php?idx=<?php echo $bno; ?>">