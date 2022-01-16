<?php
    require ('_conn.php');

    $username = $_POST['username'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $id = $_SESSION['id'];

    $imgfile = $_FILES['imgfile'];
    $imgsize = $_FILES['imgfile']['size'];

    require ('_file_upload.php');

    if ($result) {
        // if file exist
        $sql = "INSERT INTO `blog1` (`title`, `content`, `id`, `username`, `category`, `imgfile`, `imgsize`) VALUE ('$title', '$content', '$id', '$username', '$category', '$file_name', '$imgsize')";        
    } else {
        // if no file
        $sql = "INSERT INTO `blog1` (`title`, `content`, `id`, `username`, `category`) VALUE ('$title', '$content', '$id', '$username', '$category')";
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