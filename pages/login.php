<?php include 'header.php' ?>


    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto mt-5">
                    <div class="card">
                        <div class="card-header bg-secondary text-white text-center">Login Form</div>
                        <div class="card-body">
                            <h3 class="text-danger"><?php echo isset($message)? $message:''; ?></h3>
                            <form action="action.php" method="POST">
                                <div class="form-group row">
                                    <div class="col-md-3">Email Address</div>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">Password</div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-secondary" name="login_btn" value="Log in"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.php' ?>