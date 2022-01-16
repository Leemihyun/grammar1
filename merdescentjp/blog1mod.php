<?php require ('lib/top.php');?>

    <?php
    //get으로 받은 no에 맞는 데이터를 가져온다
    $no= $_GET['no'];
    require ('_conn.php');
    $sql = "SELECT * FROM `blog1` WHERE `no` = $no";
    $result = mysqli_query($conn, $sql);
     

    ?>


<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                    <p>See what’s new</p>
                    <h2>수정하기</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">




            <?php foreach($result as $v) {?>
                <!-- Contact Form Area -->
                <div class="contact-form-area">
                    <form action="_blog1mod.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <input type = "hidden" name="no" value="<?=$v['no'];?>">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" class="form-control" name="username" placeholder="Name" value="<?php if (isset($_SESSION['username'])) {echo $_SESSION['username']; } else { echo 'Guest'; }?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                    <input type="text" class="form-control" name="category" placeholder="Category" value="<?=$v['category'];?>">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group wow fadeInUp" data-wow-delay="300ms">
                                    <input type="text" class="form-control" name="title" placeholder="Title" value="<?=$v['title'];?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group wow fadeInUp" data-wow-delay="400ms">
                                    <textarea class="form-control" name="content" cols="30" rows="10" placeholder="Content"><?=$v['content'];?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>! 이 사진을 변경하려면 등록하세요. : <?=$v['imgfile']?></b><br>
                                    <input type="file" name="imgfile">
                                </div>
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                <button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            <?php }?>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->


<?php require ('lib/bottom.php');?>