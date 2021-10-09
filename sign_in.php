<?php include('inc/header.php') ;?>
    <section id="user_login">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card card-body">
                        <div class="logo">
                            <img src="assets/images/logo.png" alt="">
                            <span class="logo__title">Barisal Range</span>
                        </div>

                        <form method="post" class="col-md-12" >
                            <div class="form-group">
                                <label id="email">Email</label>
                                <input type="email" id="email" class="form-control" placeholder="Enter you email..." name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label id="Password">Password</label>
                                <input type="password" id="Password" placeholder="Password" name="pass" class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" name="login" class="btn btn-warning col-md-6 offset-md-3"> Login </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>      
    <?php include('inc/footer.php'); ?>
 