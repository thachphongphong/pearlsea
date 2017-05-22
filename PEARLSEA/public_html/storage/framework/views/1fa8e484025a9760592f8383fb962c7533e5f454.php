
<?php $__env->startSection('content_section'); ?>
    <?php echo $__env->make('title_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="mg-single-room-price">
        <div class="mg-srp-inner"><?php echo e(number_format($room->price, 0)); ?><span>đêm</span></div>
    </div>
    <div class="mg-single-room">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="mg-gallery-container">
                        <ul class="mg-gallery" id="mg-gallery">
                            <?php foreach($images as $image): ?>
                                <li><img height="350" width="670" src="<?php echo e(asset($image -> url)); ?>" alt="<?php echo e($image -> alt); ?>"></li>
                            <?php endforeach; ?>
                        </ul>
                        <ul class="mg-gallery-thumb" id="mg-gallery-thumb">
                            <?php foreach($images as $image): ?>
                                <li><img height="60" width="101" src="<?php echo e(asset($image -> thumb)); ?>" alt="<?php echo e($image -> alt); ?>"></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 mg-room-fecilities">
                    <h2 class="mg-sec-left-title"><?php echo e($constants['room']['facilities']); ?></h2>

                    <div class="row">
                        <div class="col-xs-6">
                            <ul>
                                <?php for($i = 0; $i < count($room->roomdetails)/2; $i++): ?>
                                    <li><?php if($room->roomdetails[$i]->id <= 3|| ($room->roomdetails[$i]->id >12 && $room->roomdetails[$i]->id <16)): ?>
                                            <i class="fp-ht-bed"></i>
                                        <?php elseif($room->roomdetails[$i]->id == 4 || $room->roomdetails[$i]->id == 16): ?>
                                            <i class="fa fa-sun-o"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==5 || $room->roomdetails[$i]->id == 17): ?>
                                            <i class="fp-ht-tv"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==6 || $room->roomdetails[$i]->id == 18): ?>
                                            <i class="fp-ht-telephone"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==7 || $room->roomdetails[$i]->id == 19): ?>
                                            <i class="fp-ht-computer"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==8 || $room->roomdetails[$i]->id == 20): ?>
                                            <i class="fp-ht-bathtub"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==9 || $room->roomdetails[$i]->id == 21): ?>
                                            <i class="fp-ht-icecream"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==10 || $room->roomdetails[$i]->id == 22): ?>
                                            <i class="fp-ht-hairdryer"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==11 || $room->roomdetails[$i]->id == 23): ?>
                                            <i class="fp-ht-semicircle"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==12 || $room->roomdetails[$i]->id == 24): ?>
                                            <i class="fp-ht-pool"></i>
                                        <?php endif; ?>
                                        <?php echo e($room->roomdetails[$i]->name); ?></li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                        <div class="col-xs-6">
                            <ul>
                                <?php for($i = count($room->roomdetails)/2; $i < count($room->roomdetails); $i++): ?>
                                    <li><?php if($room->roomdetails[$i]->id <= 3|| ($room->roomdetails[$i]->id >12 && $room->roomdetails[$i]->id <16)): ?>
                                            <i class="fp-ht-bed"></i>
                                        <?php elseif($room->roomdetails[$i]->id == 4 || $room->roomdetails[$i]->id == 16): ?>
                                            <i class="fa fa-sun-o"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==5 || $room->roomdetails[$i]->id == 17): ?>
                                            <i class="fp-ht-tv"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==6 || $room->roomdetails[$i]->id == 18): ?>
                                            <i class="fp-ht-telephone"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==7 || $room->roomdetails[$i]->id == 19): ?>
                                            <i class="fp-ht-computer"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==8 || $room->roomdetails[$i]->id == 20): ?>
                                            <i class="fp-ht-bathtub"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==9 || $room->roomdetails[$i]->id == 21): ?>
                                            <i class="fp-ht-icecream"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==10 || $room->roomdetails[$i]->id == 22): ?>
                                            <i class="fp-ht-hairdryer"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==11 || $room->roomdetails[$i]->id == 23): ?>
                                            <i class="fp-ht-semicircle"></i>
                                        <?php elseif($room->roomdetails[$i]->id ==12 || $room->roomdetails[$i]->id == 24): ?>
                                            <i class="fp-ht-pool"></i>
                                        <?php endif; ?>
                                        <?php echo e($room->roomdetails[$i]->name); ?></li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mg-single-room-txt">
                        <h2 class="mg-sec-left-title"><?php echo e($constants['room']['desc']); ?></h2>

                        <div class="mb80">
                            <?php foreach($services as $service): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne<?php echo e($service->id); ?>">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseOne<?php echo e($service->id); ?>" aria-expanded="true" aria-controls="collapseOne<?php echo e($service->id); ?>">
                                                <?php echo e($service->name); ?>

                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne<?php echo e($service->id); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne<?php echo e($service->id); ?>">
                                     <?php if(count($service->roomServiceDetail)): ?>
                                         <?php foreach($service->roomServiceDetail as $detail): ?>
                                            <div class="panel-body">
                                                <i class="<?php echo e($detail->css_class); ?>"></i> <?php echo e($detail->name); ?>

                                            </div>
                                         <?php endforeach; ?>
                                     <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mg-saerch-room pb70">
                    <?php echo $__env->make('book_now_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>