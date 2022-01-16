<?php
    // 글 수정
    require ('_conn.php');

    $no = $_POST['no'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $imgfile = $_FILES['imgfile'];
    $imgsize = $_FILES['imgfile']['size'];

    require ('_file_upload.php');

    if ($result) {
        // if file exist
        $sql = "UPDATE `blog1` SET `category` = '$category' , `title` = '$title' , `content` = '$content', `moddate` = CURRENT_TIMESTAMP(), `imgfile` = '$file_name', `imgsize`= '$imgsize' WHERE `no`='$no'";
    } else {
        $sql = "UPDATE `blog1` SET `category` = '$category' , `title` = '$title' , `content` = '$content', `moddate` = CURRENT_TIMESTAMP() WHERE `no`='$no'";
    }
    
    $result = mysqli_query($conn, $sql); // mysqli_query는 데이터베이스를 실행하라는 메소드
    
    if($result){  // 성공
        echo "<script>alert('게시물이 작성되었떠요!')</script>";
        echo "<script>location.href='blog1.php'</script>";
    } else {  // 실패
        echo "<script>alert('게시글 작성이 실패하였습니다')</script>";
        echo "<script>location.href='blog1.php'</script>";
    }
?>