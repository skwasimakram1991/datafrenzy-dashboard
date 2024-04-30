<?php include './inc/header2.php'; ?>

    <section class="new-password">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto text-center">
                    <img src="images/new-password.png" alt="">
                    <h3>Enter New Password</h3>
                    <p>Rorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. </p>
                    <form action="">
                        <div class="form-group">
                            <input type="password" id="password" class="form-control" value="" placeholder="Enter New Password">
                            <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" class="form-control" value="" placeholder="Confirm Your Password">
                            <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                        </div>
                        <input type="submit" value="Change Your Password" class="green-btn">
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include './inc/footer2.php'; ?>