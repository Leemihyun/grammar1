<?php
    require ('_conn.php');

    $id = $_POST['id'];
    $id = strtolower($id);

    $pw = $_POST['pw'];

    $sql = "SELECT * FROM `user01` WHERE id='$id' AND pw='$pw'";

    $result = mysqli_query($conn, $sql); // mysqli_query는 데이터베이스를 실행하라는 메소드
    $row = $result->num_rows; // num_rows는 size와 같다. 1건 취득되면 1 안되면 0
    
    if($row > 0){  // 로그인 성공
        require ('_loginok.php');
        if(isset($_SESSION['id'])){
            echo "<script>alert('로그인이 완료되었습니다.')</script>";
            echo "<script>location.href='index.php'</script>";
        }
        exit;
    } else {  // 로그인 실패
        echo "<script>alert('로그인에 실패하였습니다. 아이디와 비밀번호를 확인하세요.')</script>";
        echo "<script>location.href='login.php'</script>";
    }
?>