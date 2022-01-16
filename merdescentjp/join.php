<?php require ('lib/top.php'); ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Join</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Join Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Sign Up</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="_join.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your E-mail">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="pw" class="form-control" id="exampleInputPassword1" placeholder="Enter New Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password check</label>
                                    <input type="password" name="pwc" class="form-control" id="exampleInputPassword1" placeholder="Enter New Password again">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Enter Your name">
                                </div>                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone Number</label>
                                    <input type="text" name="tel" class="form-control" placeholder="Enter your Phone number">
                                </div>
                                <button type="submit" class="btn oneMusic-btn mt-30">Join</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

<?php require ('lib/bottom.php'); ?>