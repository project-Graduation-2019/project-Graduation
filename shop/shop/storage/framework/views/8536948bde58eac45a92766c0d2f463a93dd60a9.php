
<?php $__env->startSection('title', 'Home Page'); ?>
<?php $__env->startSection('popup'); ?>
##parent-placeholder-3b6fb9033a8302fc168ca0199caaba142dbc5530##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Contact Email Area Start -->
<div class="contact-area ptb-100 ptb-sm-60">
    <div class="container">
        <h3 class="mb-20">Contact Us</h3>
        <p class="text-capitalize mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <form id="contact-form" class="contact-form" action="mail.php" method="post">
            <div class="address-wrapper row">
                <div class="col-md-12">
                    <div class="address-fname">
                        <input class="form-control" type="text" name="name" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="address-email">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="address-web">
                        <input class="form-control" type="text" name="website" placeholder="Website">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="address-subject">
                        <input class="form-control" type="text" name="subject" placeholder="Subject">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="address-textarea">
                        <textarea name="message" class="form-control" placeholder="Write your message"></textarea>
                    </div>
                </div>
            </div>
            <p class="form-message">
            <div class="footer-content mail-content clearfix">
                <div class="send-email float-md-right">
                    <input value="Submit" class="return-customer-btn" type="submit">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Contact Email Area End -->
<!-- Google Map Start -->
<div class="goole-map">
    <div id="map" style="height:400px"></div>
</div>
<!-- Google Map End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DoAnTotNghiep\project-Graduation\shop\shop\resources\views/contact.blade.php ENDPATH**/ ?>