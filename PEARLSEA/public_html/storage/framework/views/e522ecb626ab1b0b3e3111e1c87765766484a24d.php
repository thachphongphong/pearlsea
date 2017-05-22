<?php $__env->startSection('best_room_section'); ?>
    <div class="mg-best-rooms">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mg-sec-title">

                        <h2><?php echo e($constants['bestroom']['title']); ?></h2>
                        <p><?php echo e($constants['bestroom']['desc']); ?></p>

                    </div>
                    <div class="row">
                        <?php foreach($rooms as $room): ?>
                            <div class="col-sm-4">
                                <figure class="mg-room" onclick="void(0)">
                                    <img src="<?php echo e(asset($room->image_url)); ?>" alt="img11" class="img-responsive">
                                    <figcaption>
                                        <h2><?php echo e($room->name); ?></h2>

                                        <div class="mg-room-rating"><i class="fa fa-star"></i> 5.00</div>
                                        <div class="mg-room-price"><?php echo e(number_format($room->price, 0)); ?> <?php echo e($constants['bestroom']['currency']); ?></div>
                                        <p><?php echo e($room->description); ?></p>
                                        <a href="<?php echo e(action("RoomDetailController@load", [(!Session::has('lang'))? Session::get('lang'): 'vi', $room->id])); ?>" class="btn btn-link"><?php echo e($constants['bestroom']['view']); ?> <i class="fa fa-angle-double-right"></i></a>
                                        <a href="<?php echo e(URL::to( '/'.Session::get('lang').'/booking', [$room->id])); ?>" class="btn btn-main"><?php echo e($constants['bestroom']['book']); ?></a>
                                    </figcaption>
                                </figure>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php echo $__env->yieldSection(); ?>
