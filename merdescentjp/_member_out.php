<?php
    require ('_conn.php');
    $id = $_SESSION['id'];
    $sql = "DELETE FROM `user01` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        require ('_logout.php');
        echo "<script>alert('회원탈퇴 완료!')</script>";
        echo "<script>location.href='index.php'</script>";
    } else {
        echo "<script>alert('탈퇴 실패!!')</script>";
        echo "<script>location.href='member.php'</script>";
    }
?>