<?php $__env->startSection('book_now_section'); ?>
    <div class="mg-book-now">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h2 class="mg-bn-title"><?php echo e($constants['booknow']['find_room']); ?></h2>
                </div>
                <div class="col-md-9">
                    <div class="mg-bn-forms">
                        <form method="post" id="bookingSearch" action="<?php echo e(URL::to( '/'.Session::get('lang').'/booking')); ?>" accept-charset="UTF-8">
                            <div class="row">
                                <div class="col-md-3 col-xs-6">
                                    <div class="input-group date mg-check-in">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input type="text" class="form-control" id="checkin" name="checkin" placeholder="<?php echo e($constants['booknow']['checkin']); ?>">
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <div class="input-group date mg-check-out">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input type="text" class="form-control" id="checkout" name="checkout" placeholder="<?php echo e($constants['booknow']['checkout']); ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <select class="cs-select cs-skin-elastic" id="adult" name="adult">
                                                <option value="" disabled selected><?php echo e($constants['booknow']['adult']); ?></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6">
                                            <select class="cs-select cs-skin-elastic" id="child" name="child">
                                                <option value="" disabled selected><?php echo e($constants['booknow']['child']); ?></option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button id="findBooking" class="btn btn-main btn-block"><?php echo e($constants['booknow']['find']); ?></button>
                                </div>
                                <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php echo $__env->yieldSection(); ?>
