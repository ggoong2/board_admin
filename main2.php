<?php
//db연결
include $_SERVER['DOCUMENT_ROOT']."/board/db.php";
$query = "SELECT * FROM slide_file ORDER BY idx DESC";
$result = mysqli_query($db, $query);
?>




<!DOCTYPE html>
<html>
<head>
<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>


<body>

</br></br>

<div class="container" style = "width:700px;">
    <h3 align="center">데이터를 동적으로 bootstrap modal 창에 보여주기</h3>
    <br>


    <div class="talbe-responsive">

        <!-- 추가 버튼-->
        <div align="right">
        <button type="button" name="add" id="add" data-toggle="modal"
        data-target="#add_data_Modal" class="btn btn-warning">추가</button>
        </div>

        <br>
        <div id="employee_table">
        <table class="table table-bordered">
        <tr>
        <th width="70%">이름</th>
        <th width="30%">보기</th>
        </tr>

        <?php

        while($row=mysqli_fetch_array($result))
        {
        ?>
        <tr>
        <td><?php echo $row["name"]; ?> </td>
        <td><input type="button" name ="view" value="자세히" id="<?php echo $row["id"]; ?>" class="view_data btn" /></td>
        </tr>

        <?php
        }
        ?>
        </table>
        </div>
    </div>
<div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins)

<script src="../bootstrap/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<! Include all compiled plugins (below), or include individual files as needed -->

</body>
</html>


<!-- 조회 모달 -->

<div id="dataModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<!-- 모달 헤더 -->
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">직원 상세</h4>
</div>
<!-- 모달 바디 -->
<div class="modal-body" id="employee_detail">
</div>

<!-- 모달 풋터 -->
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
</div>
</div>
</div>
</div>




<!-- 데이터 추가 모달 -->

<div id="add_data_Modal" class="modal fade">
<div class="modal-dialog">

<div class="modal-content">

<!-- 모달 헤더 -->
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">php ajax데이터를 부트스트랩 모달을 이용해서 mysql에 추가하기</h4>
</div>

<!-- 모달 바디 -->
<div class="modal-body">
<form method="post" id="insert_form">
<label>이름</label>
<input type="text" name="name" id="name" class="form-control" />
<br />
<label>주소</label>
<textarea name="address" id="address" class="form-control" ></textarea>
<br />

<label>성별</label>
<select name="gender" id="gender">
<option value="남성">남성</option>
<option value="여성">여성</option>
</select>
<br />
<br />
<label>직업</label>
<input type="text" name="designation" id="designation" class="form-control" />
<br />
<label>나이</label>
<input type="text" name="age" id="age" class="form-control" />
<br />

<input type="submit" name ="insert" id="insert" value="추가" class="btn btn-success" />

</form>
</div>

<!-- 모달 풋터 -->
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
</div>


</div>


</div>



</div>



<script>

$(document).ready(function(){


$('#insert_form').on('submit',function(event){

event.preventDefault();
if($('#name').val()=='')
{
alert("이름을 입력해주세요");
}else if($('#address').val()=='')
{
alert("주소를 입력해주세요");
}else if($('#designation').val()=='')
{
alert("직업을 입력해주세요");
}else if($('#age').val()=='')
{
alert("나이를 입력해주세요");
}else
{
$.ajax({
url:"insert.php",
method:"POST",
data:$('#insert_form').serialize(),
success:function(data){

$('#insert_form')[0].reset();
$('#add_data_Modal').modal('hide');
// window.location.reload();
$('#employee_table').html(data);

}
})

}

});


//보기 버튼을 클릭했을 때
//$('.view_data').click(function(){ -- .click 쓰면 안됨...
$(document).on('click', '.view_data', function(){
var employee_id = $(this).attr("id");

$.ajax({
//select.php 로 가서
url:"select.php",
method:"POST",
//위에서 클릭한 employee_id 데이터를 url로 넘겨주고
data:{employee_id:employee_id},
success:function(data){
//성공하면 select.php에서 뿌린 데이터를 data 변수에 담아 모달-바디에 붙여라
$('#employee_detail').html(data);
$('#dataModal').modal("show");
}
});
});
});

</script>


출처: https://abc1211.tistory.com/348 [길위의 개발자]

출처: https://abc1211.tistory.com/348 [길위의 개발자]

출처: https://abc1211.tistory.com/348 [길위의 개발자]

출처: https://abc1211.tistory.com/348 [길위의 개발자]