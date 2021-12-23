<?php
include $_SERVER['DOCUMENT_ROOT']."/board/db.php";


$idx = $_GET['idx'];
$sql = mq("select * from board where idx = '".$idx."'"); /* 받아온 idx값을 선택 */
$pf_file = $sql->fetch_array();

$oldfilename = $pf_file['file'];
$filename = $_FILES['b_file']['name'];

session_start(); 
$user_id = $_SESSION['userid'];
$date =  date("Y-m-d H:i:s");
$history = $user_id.$date.'수정';




if($oldfilename==true && $filename==true){
    $oldfolder = "upload/".$oldfilename;
    $imageNameSlice = explode(".",$filename);
    $imageName = $imageNameSlice[0];
    $imageType = $imageNameSlice[1];
    $newImage = chr(rand(97,122)).chr(rand(97,122)).$dates.rand(1,9).".".$imageType;
    $folder = "upload/".$newImage;
    // $folder = "/board/upload/".$filename;
    
    move_uploaded_file($_FILES['b_file']['tmp_name'],$folder);
    $sql = mq("update board set history='".$history."',file='".$newImage."' where idx = '".$idx."'");
    unlink("$oldfolder");
    // echo "<script>alert('{$oldfilename} .'이랑'. {$filename}');</script>";
    echo "<script>alert('수정되었습니다.');</script>";
} else {
    // $sql = mq("update slide_file set name='".$username."',pw='".$userpw."',title='".$title."',content='".$content."' where idx='".$bno."'"); 
    // Console_log mq;
    echo "<script>alert('다시시도하세요.');</script>";
} 
?>
<!-- <script type="text/javascript"> alert("수정되었습니다."); </script> -->
<meta http-equiv="refresh" content="0 url=portfolio_img.php">