<?php
include $_SERVER['DOCUMENT_ROOT']."/board/db.php";


$bno = $_GET['idx'];
$sql = mq("select * from board where idx = '".$bno."'"); /* 받아온 idx값을 선택 */
$board = $sql->fetch_array();

$oldview = $board['view'];
$neworder = $_POST['order']-1;

$sql1 = mq("select * from board order by view desc limit $neworder,1");  // 바꿀자리 파일의 idx
$board1 = $sql1->fetch_array();
$oldidx = $board1['idx'];   // 바꿀자리 파일의 idx
$newview = $board1['view'];



session_start(); 
$user_id = $_SESSION['userid'];
$date =  date("Y-m-d H:i:s");
$history = $user_id.$date.'수정';

if($oldview != $newview){
    // $oldfolder = "upload/".$oldfilename;
    // $imageNameSlice = explode(".",$filename);
    // $imageName = $imageNameSlice[0];
    // $imageType = $imageNameSlice[1];
    // $newImage = chr(rand(97,122)).chr(rand(97,122)).$dates.rand(1,9).".".$imageType;
    // $folder = "upload/".$newImage;
    // $folder = "/board/upload/".$filename;
    $update2 = mq("update board set view='".$newview."' where idx = '".$bno."'");  // 바꾸려던 파일을 기존파일의 view 로 바꿈
    $update1 = mq("update board set view='".$oldview."' where idx = '".$oldidx."'");  // 기존파일을 바꾸려던파일의 view 로 바꿈
    // move_uploaded_file($_FILES['b_file']['tmp_name'],$folder);
    // $sql = mq("update board set history='".$history."',file='".$newImage."' where idx = '".$idx."'");
    // unlink("$oldfolder");
    // echo "<script>alert('???.');</script>";
    // echo "<script>alert('$oldview .'이랑'. $newview');</script>";
    echo "<script>alert('수정되었습니다.');</script>";
} else {
    // $sql = mq("update slide_file set name='".$username."',pw='".$userpw."',title='".$title."',content='".$content."' where idx='".$bno."'"); 
    // Console_log mq;

   

    echo "<script>alert('다시시도하세요.');</script>";
} 
?>
<!-- <script type="text/javascript"> alert("수정되었습니다."); </script> -->
<meta http-equiv="refresh" content="0 url=portfolio_img.php">