<?php $__env->startSection('title', 'Home Page'); ?>
<?php $__env->startSection('popup'); ?>
	##parent-placeholder-3b6fb9033a8302fc168ca0199caaba142dbc5530##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
	##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- LogIn Page Start -->
<div class="log-in ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <!-- New Customer Start -->
                    <div class="col-md-6">
                        <div class="well mb-sm-30">
                            <div class="new-customer">
                                <h3 class="custom-title">new customer</h3>
                                <p class="mtb-10"><strong>Register</strong></p>
                                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made</p>
                                <a class="customer-btn" href="register.php">continue</a>
                            </div>
                        </div>
                    </div>
                    <!-- New Customer End -->
                    <!-- Returning Customer Start -->
                    <div class="col-md-6">
                        <div class="well">
                            <div class="return-customer">
                                <h3 class="mb-10 custom-title">returnng customer</h3>
                                <p class="mb-10"><strong>I am a returning customer</strong></p>
                                <form action="#">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" placeholder="Enter your email address..." id="input-email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" name="pass" placeholder="Password" id="input-password" class="form-control">
                                    </div>
                                    <p class="lost-password"><a href="forgot-password.php">Forgot password?</a></p>
                                    <input type="submit" value="Login" class="return-customer-btn">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Returning Customer End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- LogIn Page End -->
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Desktop/shop/resources/views/login.blade.php ENDPATH**/ ?>