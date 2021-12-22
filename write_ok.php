<?php
include $_SERVER['DOCUMENT_ROOT']."/BOARD/db.php";
// function Console_log($data){
//     echo "<script>console.log( 'PHP_Console: " . $data . "' );</script>";
// }

//각 변수에 write.php에서 input name값들을 저장한다
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
// $userpw = $_POST['pw'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');

session_start(); 
$user_id = $_SESSION['userid'];
$date =  date("Y-m-d H:i:s");
$history = $user_id.$date.'첫 작성';

// $tmpfile =  $_FILES['b_file']['tmp_name'];
// $o_name = $_FILES['b_file']['name'];
$filename = $_FILES['b_file']['name'];

// $filename = $_FILES['b_file']['name'];
// $folder = "upload/".$filename;
// move_uploaded_file($_FILES['b_file']['tmp_name'],$folder);


//이미지업로드
$sql1 = mq("select MAX(view) as view FROM board");
$rw = $sql1->fetch_array();
$row_num = $rw['view'];
$view = $row_num+1;

if($filename == true){
    if($username && $userpw && $title && $content && $date && $filename && $view){
        $imageNameSlice = explode(".",$filename);
        $imageName = $imageNameSlice[0];
        $imageType = $imageNameSlice[1];
        $newImage = chr(rand(97,122)).chr(rand(97,122)).$dates.rand(1,9).".".$imageType;
        $folder = "upload/".$newImage;
        move_uploaded_file($_FILES['b_file']['tmp_name'],$folder);

        $sql = mq("insert into board(name,pw,title,content,date,file,view,history) values('".$username."','".$userpw."','".$title."','".$content."','".$date."','".$newImage."','".$view."','".$history."')"); 
        echo "<script>
        alert('글쓰기 완료되었습니다.');
        location.href='portfolio_img.php';</script>";
    }
}else{
    $sql = mq("insert into board(name,pw,title,content,date) values('".$username."','".$userpw."','".$title."','".$content."','".$date."')"); 
        echo "<script>
        alert('글쓰기 완료되었습니다.');
        location.href='portfolio_img.php';</script>";
}


// if($username && $userpw && $title && $content && $date && $filename){
//     $sql = mq("insert into board(name,pw,title,content,date,file) values('".$username."','".$userpw."','".$title."','".$content."','".$date."','".$newImage."')"); 
//     echo "<script>
//     alert('글쓰기 완료되었습니다.');
//     location.href='portfolio.php';</script>";
// }else{
//     echo "<script>
//     alert('글쓰기에 실패했습니다.');
//     history.back();</script>";
// }
?>