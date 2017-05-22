<?php $__env->startSection('promotion_section'); ?>
<div class="btn-main mg-promotion">
    <div class="row">
        <?php foreach($promotions as $pro): ?>
            <h2 class="mg-sec-left-title" style="margin: 0; padding-bottom: 5px;"><?php echo e($pro->description); ?> : <?php echo e($pro->sale_off); ?></h2>
            <p style="margin-bottom: 0;"><?php echo e($constants['room']['promotion_app']); ?> <?php echo e($constants['room']['promotion_from']); ?> :  <?php echo e(date('d-m-Y', strtotime($pro->apply_time_from))); ?> <?php echo e($constants['room']['promotion_to']); ?> :  <?php echo e(date('d-m-Y', strtotime($pro->apply_time_to))); ?></p>
        <?php endforeach; ?>
    </div>
</div>
<?php echo $__env->yieldSection(); ?>