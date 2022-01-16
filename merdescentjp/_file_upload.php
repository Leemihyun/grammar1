<?php
if(isset($imgfile)) {
    //디렉토리
    $dir = "blog_img/";
    //파일명, 임시파일명
    $file_name = basename($imgfile['name']);
    $tmp_name = $imgfile['tmp_name'];
    //파일중복방지 위해 파일명변경
    $addName = strtotime(date("Y-m-d H:i:s")); //현재날짜 시간 초 구하는 변수
    $milliseconds = round(microtime(true) * 1000); //현재날짜를 밀리초로 바꾸는변수(더 확실히 중복방지할때 추가1)
    $addName .= $milliseconds; //파일이름에 밀리초 추가하는 변수(더 확실히 중복방지할때 추가2)
    $file_name = $addName . "_" . $file_name; //변수들을 이용하여 실제 파일명변경 실행
    //파일업로드
    $result = move_uploaded_file($tmp_name, $dir.$file_name);
}
?>