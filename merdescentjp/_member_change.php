<?php
    require ('_conn.php');

    $id = $_POST['id'];
    $id = strtolower($id);

    //new pw
    $newpw = $_POST['newpw'];
    $newpwc = $_POST['newpwc'];
    //기타회원정보
    $username = $_POST['username'];
    $tel = $_POST['tel'];

    //새로운 패스워드 체크
    if(!$newpw){ //뉴비번이 공백일때
        //비번 안바꿨을때 
        $sql = "UPDATE `user01` SET `username` = '$username' , `tel` = '$tel' WHERE `user01`.`id`='$id'";
    } else {
        //비번 바꿨을때 
        if($newpw != $newpwc) {
            echo "<script>alert('비밀번호가 일치하지않습니다.')</script>";
            echo "<script>location.href='member_change.php'</script>";
        }
        $sql = "UPDATE `user01` SET `username` = '$username' , `tel` = '$tel', `pw` = '$newpw' WHERE `user01`.`id`='$id'";
    }
    
    $result = mysqli_query($conn, $sql); // mysqli_query는 데이터베이스를 실행하라는 메소드
    
    if($result){  // 비번변경 성공
        require ('_loginok.php');
        if(isset($_SESSION['id'])){
            echo "<script>alert('변경되었습니다!')</script>";
            echo "<script>location.href='index.php'</script>";
        }
    } else {  // 비번변경 실패
        echo "<script>alert('변경되지않았습니다')</script>";
        echo "<script>location.href='member_change.php'</script>";
    }

?>