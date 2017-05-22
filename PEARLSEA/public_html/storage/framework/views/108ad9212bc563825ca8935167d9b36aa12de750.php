<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="<?php echo csrf_token(); ?>"/>
    <meta id="token" name="token" content="<?php echo e(csrf_token()); ?>">

    <link rel="shortcut icon" href="<?php echo e(asset('/images/favicon.ico')); ?>">
    <title>PEARL SEA HOTEL ADMINISTRATION</title>

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
    <link href="<?php echo e(asset('/css/jquery-ui.css')); ?>" rel="stylesheet">
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
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="<?php echo e(url('vi/home')); ?>">Trang chính</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php if(!Auth::guest()): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo e(Auth::user()->username); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo e(url('vi/admin/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php echo $__env->yieldContent('content'); ?>

<?php if(Auth::guest()): ?>
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
<script src="<?php echo e(asset('/js/gmaps.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/jquery.parallax-1.1.3.js')); ?>"></script>
<script src="<?php echo e(asset('/js/script.js')); ?>"></script>
<script src="<?php echo e(asset('/js/validate.js')); ?>"></script>


<?php else: ?>
<script src="<?php echo e(asset('/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>

<script src="<?php echo e(asset('/js/dashboard/dashboard.js')); ?>"></script>
<script src="<?php echo e(asset('/js/dashboard/about.js')); ?>"></script>
<script src="<?php echo e(asset('/js/dashboard/contact.js')); ?>"></script>
<script src="<?php echo e(asset('/js/dashboard/uploadImage.js')); ?>"></script>
<script src="<?php echo e(asset('/js/dashboard/dialog_handel.js')); ?>"></script>
<script src="<?php echo e(asset('/js/dashboard/news.js')); ?>"></script>
<script src="<?php echo e(asset('/js/dashboard/room.js')); ?>"></script>
<script src="<?php echo e(asset('/js/waitingForDialog.js')); ?>"></script>
<script src="<?php echo e(asset('/js/dashboard/booking.js')); ?>"></script>
<script src="<?php echo e(asset('/js/dashboard/tour.js')); ?>"></script>
<script src="<?php echo e(asset('/js/dashboard/promotion.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/js/tinymce/tinymce.min.js')); ?>"></script>
<?php endif; ?>

</body>

</html>