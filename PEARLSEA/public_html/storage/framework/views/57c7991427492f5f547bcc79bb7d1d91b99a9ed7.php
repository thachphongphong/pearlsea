<?php $__env->startSection('hotel_facilities_section'); ?>
    <div class="mg-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mg-sec-title">
                        <h2><?php echo e($constants['facilities']['title']); ?></h2>
                        <p><?php echo e($constants['facilities']['desc']); ?></p>
                    </div>
                    <?php foreach($room_services as $room_service): ?>
                        <?php if(count($room_service->bestRoomServiceDetail)): ?>
                            <div class="row">
                                <?php foreach($room_service->bestRoomServiceDetail as $detail): ?>
                                    <div class="col-sm-4">
                                        <div class="mg-feature">
                                            <div class="mg-feature-icon-title">
                                                <i class="<?php echo e($detail->css_class); ?>"></i>
                                                <h3><?php echo e($detail->name); ?></h3>
                                            </div>
                                            <p><?php echo e($detail->description); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php echo $__env->yieldSection(); ?>
