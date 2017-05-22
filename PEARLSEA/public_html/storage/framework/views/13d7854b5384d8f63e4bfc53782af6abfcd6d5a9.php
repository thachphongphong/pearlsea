
<?php $__env->startSection('content_section'); ?>
    <?php echo $__env->make('title_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('book_now_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="mg-page mg-available-rooms">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php foreach($rooms as $room): ?>
                        <div class="mg-avl-room">
                            <div class="row">
                                <div class="col-sm-5">
                                    <a href="#"><img src="<?php echo e(asset($room->image_url)); ?>" alt=""
                                                     class="img-responsive"></a>
                                </div>
                                <div class="col-sm-7">
                                    <h3 class="mg-avl-room-title"><a href="#"><?php echo e($room->name); ?></a>
                                        <span><?php echo e(number_format($room->price, 0)); ?> <?php echo e($constants['room']['currency']); ?></span></h3>

                                    <p><span><?php echo e($room->description); ?></span> - <span><?php echo e($room->total_person); ?> <?php echo e($constants['room']['person']); ?></span></p>

                                    <div class="row mg-room-fecilities">
                                        <div class="col-sm-6">
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
                                        <div class="col-sm-6">
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

                                    <a href=" <?php echo e(action("RoomDetailController@load", [(!Session::has('lang'))? Session::get('lang'): 'vi', $room->id])); ?>" class="btn btn-dark "> <i
                                                class="fa fa-angle-double-right"><?php echo e($constants['room']['detail']); ?></i></a>
                                    <a href="<?php echo e(URL::to( '/'.Session::get('lang').'/booking', [$room->id])); ?>" class="btn btn-main pull-right"><?php echo e($constants['room']['book']); ?></a>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>