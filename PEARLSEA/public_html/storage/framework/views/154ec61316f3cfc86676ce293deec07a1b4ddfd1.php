<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="<?php echo csrf_token(); ?>"/>
    <meta id="token" name="token" content="<?php echo e(csrf_token()); ?>">

    <link rel="shortcut icon" href="<?php echo e(asset('/images/favicon.ico')); ?>">
    <title>PEARL SEA HOTEL</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/css/font-awesome.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('/css/owl.carousel.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/css/owl.theme.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/css/owl.transitions.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/css/cs-select.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/css/bootstrap-datepicker3.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/css/freepik.hotels.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/css/style.css')); ?>" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo e(asset('/js/html5shiv.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/respond.min.js')); ?>"></script>
    <![endif]-->
    <script src="<?php echo e(asset('/js/modernizr.custom.min.js')); ?>"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo e(asset('/js/jquery.min.js')); ?>"></script>
</head>
<body>
<div class="preloader"></div>
<?php echo $__env->make('header_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('hotline_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('content_section'); ?>
<?php echo $__env->make('footer_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/jssor.slider.mini.js')); ?>"></script>
<script src="<?php echo e(asset('/js/classie.js')); ?>"></script>
<script src="<?php echo e(asset('/js/selectFx.js')); ?>"></script>
<script src="<?php echo e(asset('/js/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/starrr.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/nivo-lightbox.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/jquery.shuffle.min.js')); ?>"></script>
<?php /*<script src="http://maps.google.com/maps/api/js?sensor=true') }}"></script>*/ ?>
<?php /*<script src="<?php echo e(asset('/js/gmaps.min.js')); ?>"></script>*/ ?>
<script src="<?php echo e(asset('/js/jquery.parallax-1.1.3.js')); ?>"></script>
<script src="<?php echo e(asset('/js/script.js')); ?>"></script>
<script src="<?php echo e(asset('/js/validate.js')); ?>"></script>
<script src="<?php echo e(asset('/js/jquery-dateFormat.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/utils.js')); ?>"></script>
</body>

</html>