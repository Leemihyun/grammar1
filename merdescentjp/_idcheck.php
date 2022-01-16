<?php
    
    $sql = "SELECT id FROM `user01` WHERE id='$id' AND pw='$pw'";

    $result = mysqli_query($conn, $sql); // mysqli_query는 데이터베이스를 실행하라는 메소드
    $row = $result->num_rows; // num_rows는 size와 같다. 1건 취득되면 1 안되면 0
    
    if($row > 0){  // 중복된아이디걸러내기
        echo "<script>alert('중복된 아이디입니다. 다른아이디를 입력하세요.')</script>";
        echo "<script>location.href='join.php'</script>";
    } 
?>