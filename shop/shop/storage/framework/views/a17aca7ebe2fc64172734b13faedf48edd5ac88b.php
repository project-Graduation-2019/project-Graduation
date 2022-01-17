
<?php $__env->startSection('title', 'Home Page'); ?>
<?php $__env->startSection('popup'); ?>
##parent-placeholder-3b6fb9033a8302fc168ca0199caaba142dbc5530##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="404.html">404</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<div class="error404-area ptb-100 ptb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-wrapper text-center">
                    <div class="error-text">
                        <h1>404</h1>
                        <h2>Opps! PAGE NOT BE FOUND</h2>
                        <p>Sorry but the page you are looking for does not exist, have been removed, name changed or is
                            temporarity unavailable.</p>
                    </div>
                    <div class="search-error">
                        <form id="search-form" action="#">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="error-button">
                        <a href="index.html">Back to home page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DoAnTotNghiep\project-Graduation\shop\shop\resources\views/404.blade.php ENDPATH**/ ?>