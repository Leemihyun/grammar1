<?php require ('lib/top.php'); ?>

<!--DB연동-->
<?php require ('_conn.php'); ?>
<!--블로그설정연동-->
<?php require ('_blog1page.php'); ?>



    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>Mer de Scent</p>
            <h2>EVENT BLOG</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">

                <?php if (isset($_SESSION['id'])) { ?>
                    <button onclick="location.href='blog1write.php'"> New Content </button>
                <?php } ?>

                <!--_blog1page.php에있음-->
                <?php foreach($result_blog as $v) {?>






                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="blog_img/<?=$v['imgfile']?>" alt="blog img" width="100%"></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <?php
                                    //moddate의값이 null이 아닐경우
                                    if ($v['moddate'] != null){
                                        $day = DateTime::createFromFormat("Y-m-d H:i:s", "{$v['moddate']}")->format("d");
                                        $month = DateTime::createFromFormat("Y-m-d H:i:s", "{$v['moddate']}")->format("F");
                                        $year = DateTime::createFromFormat("Y-m-d H:i:s", "{$v['moddate']}")->format("y");
                                    } else {
                                        $day = DateTime::createFromFormat("Y-m-d H:i:s", "{$v['regdate']}")->format("d");
                                        $month = DateTime::createFromFormat("Y-m-d H:i:s", "{$v['regdate']}")->format("F");
                                        $year = DateTime::createFromFormat("Y-m-d H:i:s", "{$v['regdate']}")->format("y");
                                    }
                                ?>
                                <span><?=$day;?></span>
                                <span><?=$month;?> ‘<?=$year;?></span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title"><?=$v['title'];?></a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <p class="post-author">By<a href="#"> <?=$v['username'];?></a></p>
                                <p class="tags">in<a href="#"> <?=$v['category'];?></a></p>                            </div>
                            <!-- Post Excerpt -->
                            <p><?=$v['content'];?></p>

                            <?php if ($_SESSION['id'] == $v['id']) { ?>
                                <?php $no = $v['no']; ?>
                                <button onclick="location.href='blog1mod.php?no=<?=$no;?>'">modify</button>
                                <button onclick="location.href='_blog1delete.php?no=<?=$no;?>'">delete</button>
                            <?php } ?>
                        </div>
                    </div>

                    <?php } ?>

                    <!-- Pagination -->
                    <div class="oneMusic-pagination-area wow fadeInUp" data-wow-delay="300ms">
                        <nav>
                            <ul class="pagination">
                                <?php if ($current_blog_page == 1) {?>
                                    <li class="page-item active"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">front</a></li>
                                <?php } else { ?>
                                    <li class="page-item active"><a class="page-link" href="blog1.php?current_blog_page=1">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="blog1.php?current_blog_page=<?=$prev_blog_page;?>">front</a></li>
                                <?php } ?>
                                <?php if ($current_blog_page == $end_blog_page) {?>
                                    <li class="page-item"><a class="page-link" href="#">back</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">&raquo;</a></li>
                                <?php } else { ?>
                                    <li class="page-item"><a class="page-link" href="blog1.php?current_blog_page=<?=$next_blog_page;?>">back</a></li>
                                    <li class="page-item active"><a class="page-link" href="blog1.php?current_blog_page=<?=$end_blog_page;?>">&raquo;</a></li>
                                <?php } ?>
                                <br>
                                <p> current page<?=$current_blog_page;?> / total page<?=$end_blog_page;?></p>
                            
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="blog-sidebar-area">

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <div class="widget-title">
                                <h5>Categories</h5>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="#">Music</a></li>
                                    <li><a href="#">Events &amp; Press</a></li>
                                    <li><a href="#">Festivals</a></li>
                                    <li><a href="#">Lyfestyle</a></li>
                                    <li><a href="#">Uncategorized</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <div class="widget-title">
                                <h5>Archive</h5>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="#">February 2018</a></li>
                                    <li><a href="#">March 2018</a></li>
                                    <li><a href="#">April 2018</a></li>
                                    <li><a href="#">May 2018</a></li>
                                    <li><a href="#">June 2018</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <div class="widget-title">
                                <h5>Tags</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="tags">
                                    <li><a href="#">music</a></li>
                                    <li><a href="#">events</a></li>
                                    <li><a href="#">artists</a></li>
                                    <li><a href="#">press</a></li>
                                    <li><a href="#">mp3</a></li>
                                    <li><a href="#">videos</a></li>
                                    <li><a href="#">concerts</a></li>
                                    <li><a href="#">performers</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <a href="#"><img src="img/bg-img/add.gif" alt=""></a>
                        </div>

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <a href="#"><img src="img/bg-img/add2.gif" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p>See what’s new</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

<?php require ('lib/bottom.php'); ?>