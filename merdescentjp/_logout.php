<?php
    //세션 재시작
    session_unset();
    SESSION_DESTROY();
    session_start();
    //로그인 화면으로 이동
    echo "<script>alert('로그아웃 되었습니다.')</script>";
    echo "<script>location.href='login.php'</script>";
?>











