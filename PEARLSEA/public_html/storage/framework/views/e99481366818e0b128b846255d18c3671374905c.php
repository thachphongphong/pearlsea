<?php $__env->startSection('content_section'); ?>

    <div class="mg-page-title parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php echo e($constants['contact']['title']); ?></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="mg-page">
        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <h2 class="mg-sec-left-title"><?php echo e($constants['contact']['send_email']); ?></h2>

                    <form class="clearfix">
                        <div class="mg-contact-form-input">
                            <label for="full-name"><?php echo e($constants['contact']['full_name']); ?></label>
                            <input type="text" class="form-control" id="fullname">
                        </div>
                        <div class="mg-contact-form-input">
                            <label for="email"><?php echo e($constants['contact']['email']); ?></label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="mg-contact-form-input">
                            <label for="subject"><?php echo e($constants['contact']['subject']); ?></label>
                            <input type="text" class="form-control" id="subject">
                        </div>
                        <div class="mg-contact-form-input">
                            <label for="content"><?php echo e($constants['contact']['content']); ?></label>
                            <textarea class="form-control" id="content" rows="5"></textarea>
                        </div>
                        <input type="submit" id="send-btn" class="btn btn-dark-main pull-right"
                               value="<?php echo e($constants['contact']['send']); ?>">
                    </form>
                </div>
                <div class="col-md-7">
                    <h2 class="mg-sec-left-title"><?php echo e($constants['contact']['title']); ?></h2>
                    <ul class="mg-contact-info">
                        <li><i class="fa fa-map-marker"></i> <?php echo e($contact->address); ?></li>
                        <li><i class="fa fa-phone"></i> <?php echo e($contact->telephone); ?></li>
                        <li><i class="fa fa-mobile"></i> <?php echo e($contact->phone); ?></li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo e($contact->email_to); ?>"><?php echo e($contact->email_to); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>