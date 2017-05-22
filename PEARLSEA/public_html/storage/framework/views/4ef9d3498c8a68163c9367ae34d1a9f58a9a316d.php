<?php $__env->startSection('testimonial_section'); ?>
     <div class="mg-testi-partners parallax">
        <div class="container">
                <div class="mb50">
                    <div class="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mg-sec-title">
                                    <h2 style="color: #fff;"><?php echo e($constants['testimonial']['tour']); ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <?php foreach($tours as $tour): ?>
                            <div class="col-sm-4">
                                <div class="mg-team-member">
                                    <figure>
                                        <img width="480" src="<?php echo e(asset($tour->imageUrl)); ?>" alt="<?php echo e($tour->id); ?>" class="img-responsive center-block">
                                    </figure>
                                    <div class="mg-team-member-overlayer"></div>
                                    <div class="mg-team-info">
                                        <h3><?php echo e($tour->arrival); ?></h3>
                                        <strong><?php echo e($tour->duration); ?></strong>
                                        <p><?php echo e($tour->note); ?></p>
                                        <span><a href="javascript:void(0)"><i class="fa fa-tag"><?php echo e($constants['testimonial']['departure']); ?> : <?php echo e($tour->departure); ?></i></a></span>
                                        <span><a href="javascript:void(0)"><i class="fa fa-tag"><?php echo e($constants['testimonial']['price']); ?> : <?php echo e($tour->price); ?>VND</i></a></span>
                                        
                                    </div>
                                </div>
                            </div>
                          <?php endforeach; ?>    
                            
                        </div>
                    </div>
                </div>

            </div>
    </div>
<?php echo $__env->yieldSection(); ?>
