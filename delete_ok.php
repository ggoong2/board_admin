<?php
include $_SERVER['DOCUMENT_ROOT']."/board/db.php";

$idx = $_GET['idx'];
 /* 받아온 idx값을 선택 */
$sql = mq("select * from board where idx = '".$idx."'");
$board = $sql->fetch_array();
// session_start(); 
// $user_id = $_SESSION['userid'];
// $date =  date("Y-m-d H:i:s");
// $content = $user_id.$date;
// echo $content;
$oldfilename = $board['file'];
if($idx==true){
    $oldfolder = "/board/upload/".$oldfilename;
    unlink("$oldfolder");
    $sql = mq("delete from board where idx = '".$idx."'");

    echo "<script>alert('$oldfilename 사진이 삭제되었습니다.');</script>";
} else {
    // $sql = mq("update slide_file set name='".$username."',pw='".$userpw."',title='".$title."',content='".$content."' where idx='".$bno."'"); 
    // Console_log mq;
    echo "<script>alert('다시시도하세요.');</script>";
} 
?>
<!-- <script type="text/javascript"> alert("수정되었습니다."); </script> -->
<meta http-equiv="refresh" content="0 url=portfolio_img.php">