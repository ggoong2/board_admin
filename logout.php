<?php
    session_start();
    session_destroy();
    echo "<script>alert('로그인해주세요.');</script>";
?>
<meta http-equiv="refresh" content="0;url=index.php" />