<?php
    require ('_conn.php');
    $no = $_GET['no'];
    //디비에서까지 삭제
    //$sql = "DELETE FROM `blog1` WHERE `no` = '$no'";
    //디비에는 남겨둠
    $sql = "UPDATE `blog1` SET `delflag` = 1 WHERE `no` = '$no'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('delete complete!')</script>";
        echo "<script>location.href='blog1.php'</script>";
    } else {
        echo "<script>alert('delete FAIL!')</script>";
        echo "<script>location.href='blog1.php'</script>";
    }
?>