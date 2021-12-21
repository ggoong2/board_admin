<?php 
    include $_SERVER['DOCUMENT_ROOT']."/board/board/db.php";    

    $id=$_POST['id'];
    $email=$_POST['email'];
    $pw=$_POST['pw'];
    $pw1=$_POST['pw1'];

    if($pw === $pw1){
        if($id && $email && $pw){
            $sql = mq("insert into user(id,email,pw) values('".$id."','".$email."','".$pw."')"); 
            echo "<script>
            alert('계정이 생성되었습니다.');
            location.href='login.php';</script>";}
    } else{
        echo "<script>
        alert('비번이 다릅니다.');
        history.back();</script>";
    }



?>