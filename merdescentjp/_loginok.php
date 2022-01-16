<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    $_SESSION['id'] = $id;

    require ('_conn.php');
    // 테이블명은 빽틱 ``사용!!!!!!!
    $sql = "SELECT * FROM `user01` where id='$id'";
    $result = mysqli_query($conn, $sql);
    foreach($result as $user) {
        $username = $user['username'];
        $tel = $user['tel'];
    }

    $_SESSION['username'] = $username;
    $_SESSION['tel'] = $tel;
?>