<?php
include $_SERVER['DOCUMENT_ROOT']."/board/board/db.php";


$view = $_GET['view'];
$sql = mq("select * from slide_file where view = '".$view."'"); /* 받아온 idx값을 선택 */
$slide_file = $sql->fetch_array();

session_start(); 
$user_id = $_SESSION['userid'];
$date =  date("Y-m-d H:i:s");
$content = $user_id.$date;
echo $content;

$oldfilename = $slide_file['file'];
$filename = $_FILES['b_file']['name'];


// $folder = "slide_img/".$filename;
// move_uploaded_file($_FILES['b_file']['tmp_name'],$folder);

// if($filename==true){
//     if($oldfolder==true){
        
//     }
// }


if($oldfilename==true && $filename==true){
    $oldfolder = "slide_img/".$oldfilename;
    // $imageNameSlice = explode(".",$filename);
    // $imageName = $imageNameSlice[0];
    // $imageType = $imageNameSlice[1];
    // $newImage = chr(rand(97,122)).chr(rand(97,122)).$dates.rand(1,9).".".$imageType;
    // $folder = "slide_img/".$newImage;
    $folder = "slide_img/".$filename;
    unlink("$oldfolder");
    move_uploaded_file($_FILES['b_file']['tmp_name'],$folder);
    $sql = mq("update slide_file set content='".$content."',file='".$filename."' where view='".$view."'");
    
    echo "<script>alert('$oldfolder.$oldfolder');</script>";
    echo "<script>alert('수정되었습니다.');</script>";
} else {
    // $sql = mq("update slide_file set name='".$username."',pw='".$userpw."',title='".$title."',content='".$content."' where idx='".$bno."'"); 
    // Console_log mq;
    echo "<script>alert('다시시도하세요.');</script>";
} 
?>
<!-- <script type="text/javascript"> alert("수정되었습니다."); </script> -->
<meta http-equiv="refresh" content="0 url=slide_img.php">