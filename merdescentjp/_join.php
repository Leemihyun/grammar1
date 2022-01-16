<?php
    require ('_conn.php');

    $id = $_POST['id'];
    $id = strtolower($id);

    $pw = $_POST['pw'];
    $pwc = $_POST['pwc'];
    $username = $_POST['username'];
    $tel = $_POST['tel'];

    require ('_idcheck.php');

    if($pw != $pwc) {
        echo "<script>alert('비밀번호가 일치하지않습니다.')</script>";
        echo "<script>location.href='join.php'</script>";
    }

    $sql = "INSERT INTO `user01` VALUE ('$id', '$pw', '$username', '$tel')";

    $result = mysqli_query($conn, $sql); // mysqli_query는 데이터베이스를 실행하라는 메소드
    
    if($result){  // 회원가입 성공
        require ('_loginok.php');
        if(isset($_SESSION['id'])){
            echo "<script>alert('축하합니다. 회원가입에 성공하였습니다.')</script>";
            echo "<script>location.href='index.php'</script>";
        }
    } else {  // 회원가입 실패
        echo "<script>alert('회원가입에 실패하였습니다.')</script>";
        echo "<script>location.href='join.php'</script>";
    }

?>