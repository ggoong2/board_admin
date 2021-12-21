<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


    <title>Document</title>
</head>
<body>
    <div>
        <button id="one_button">one</button>
        <button id="two_button">two</button>
        <button id="three">show</button>
    </div>  

    <div>
        <div id = "one">

            <?php include 'slide_img.php' ?>
        </div>

        <div id = "two">

        <?php include "main.php" ?>

        </div>
        <div id= "show">

        </div>

    </div>



<style>
    #one {

        background-color: blue;
    }
    #two {
        display: none;
        background-color: red;
    }

    

</style>
    
<script>
    
    $(function(){
        $("#one_button").click(function(){
            $("#one").css("display","");
            $("#two").css("display","none");
        });
        $("#two_button").click(function(){
            $("#two").css("display","flex");
            $("#one").css("display","none");
        });
        $("#three").click(function(){
            $("#show").text("include slide_img.php");
            $("#show").show();
        });
    });

</script>












</body>





</html>