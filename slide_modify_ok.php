<?php
include $_SERVER['DOCUMENT_ROOT']."/board/db.php";

$select1 = $_POST['view1'];
$select2 = $_POST['view2'];
$select3 = $_POST['view3'];
$filename1 = $_FILES['b_file1']['name'];
$filename2 = $_FILES['b_file2']['name'];
$filename3 = $_FILES['b_file3']['name'];



$sql1 = mq("select * from slide_file where view = '1'"); /* 받아온 idx값을 선택 */
$slide_file1 = $sql1->fetch_array();
$sql2 = mq("select * from slide_file where view = '2'"); /* 받아온 idx값을 선택 */
$slide_file2 = $sql2->fetch_array();
$sql3 = mq("select * from slide_file where view = '3'"); /* 받아온 idx값을 선택 */
$slide_file3 = $sql3->fetch_array();

// 어드민 아이디 
session_start(); 
$user_id = $_SESSION['userid'];
$date =  date("Y-m-d H:i:s");
$content = $user_id.$date;

// 예전 파일 이름
$oldfilename1 = $slide_file1['file'];
$oldfilename2 = $slide_file2['file'];
$oldfilename3 = $slide_file3['file'];




if($select1 !== $select2 && $select2 !== $select3 && $select1 !== $select3){
    echo "<script>alert('굿');</script>";
    $sql1 = mq("update slide_file (content, view) values('".$content."','".$select1."'),('".$content."','".$select2."'),('".$content."','".$select3."')");
    $sql1 = mq("update slide_file set view='".$select1."',content='".$content."' where view='1'");
    $sql2 = mq("update slide_file set view='".$select2."',content='".$content."' where view='2'");
    $sql3 = mq("update slide_file set view='".$select3."',content='".$content."' where view='3'");

    if($oldfilename==true && $filename==true){
        $oldfolder = "slide_img/".$oldfilename;
        $folder = "slide_img/".$filename;
        move_uploaded_file($_FILES['b_file']['tmp_name'],$folder);
        $sql = mq("update slide_file set content='".$content."',file='".$filename."' where view='".$view."'");
        unlink("$oldfolder");
        echo "<script>alert('수정되었습니다.');</script>";
    } else {
        echo "<script>alert('다시시도하세요.');</script>";
    } 



}else{
    echo "<script>alert('순서를 정해주세요.');</script>";
    echo "<script>alert('$oldfilename1.$oldfilename2.$oldfilename3.');</script>";
    echo "<script>alert('$filename1.$filename2.$filename3.');</script>";
    echo "<script>alert('$select1.$select2.$select3.');</script>";
}
?>
<meta http-equiv="refresh" content="0 url=index.php?page=slide_img">
