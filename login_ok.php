<?php 
    include $_SERVER['DOCUMENT_ROOT']."/board/db.php";    

    $id=$_POST['id'];
    $pw=$_POST['pw'];
    
    $sql_id = mq("select count(*) from user where id='".$id."'"); 
    $sql_pw = mq("select count(*) from user where id='".$id."' and pw='".$pw."'"); 

    $db_id = $sql_id->fetch_array();
    $db_pw = $sql_pw->fetch_array();
    $user_id = $db_id['count(*)'];
    $user_pw = $db_pw['count(*)'];

    if($user_id == "1"){
        if($user_pw == "1"){
            session_start();
            $_SESSION['userid'] = $_POST['id'];
            $_SESSION['userpw'] = $_POST['pw'];
           $date = date("Y-m-d H:i:s");
           $sql = mq("update user set date = '".$date."' where id = '".$id."'"); 
            echo "<script>
            alert('로그인 성공! 시간저장 성공!');
            location.href='index.php';
            </script>";
        }else{
            echo "<script>
            alert('비밀번호를 확인하세요');
            history.back();</script>";
        }
    } else{
        echo "<script>
        alert('관리자 아이디를 확인하세요');
        history.back();</script>";
    }

   

?>

