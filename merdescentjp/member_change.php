<?php require ('lib/top.php'); ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>회원정보수정</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Join Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>회원정보수정</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="_member_change.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$_SESSION['id'];?>" placeholder="Enter your E-mail">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">NEW Password</label>
                                    <input type="password" name="newpw" class="form-control" id="exampleInputPassword1" placeholder="Enter New Password" minlength="4">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">NEW Password check</label>
                                    <input type="password" name="newpwc" class="form-control" id="exampleInputPassword1" placeholder="Enter New Password again" minlength="4">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Username</label>
                                    <input type="text" name="username" class="form-control" value="<?=$_SESSION['username'];?>" placeholder="Enter Your name">
                                </div>                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone Number</label>
                                    <input type="text" name="tel" class="form-control" placeholder="Enter your Phone number">
                                </div>
                                <button type="submit" class="btn oneMusic-btn mt-30">Apply</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

<?php require ('lib/bottom.php'); ?>