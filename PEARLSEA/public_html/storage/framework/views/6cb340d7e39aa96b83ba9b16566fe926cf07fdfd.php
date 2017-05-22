<?php $__env->startSection('slider_section'); ?>
    <div id="mega-slider" class="carousel slide " data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#mega-slider" data-slide-to="0" class="active"></li>
            <li data-target="#mega-slider" data-slide-to="1"></li>
            <li data-target="#mega-slider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php for($i = 0; $i < count($sliders); $i++): ?>
                <div class="item <?php if($i == 0): ?>active beactive <?php endif; ?>">
                    <img src="<?php echo e(asset($sliders[$i]->image_url)); ?>" alt="Biển Ngọc Đà Nẵng">

                    <div class="carousel-caption">
                        <img src="<?php echo e(asset('images/stars.png')); ?>" alt="Biển Ngọc Đà Nẵng">
                        <div class="offers-box">
                            <h2><?php echo e($sliders[$i]->h_info); ?></h2>

                            <p><?php echo e($sliders[$i]->p_info); ?></p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#mega-slider" role="button" data-slide="prev">
        </a>
        <a class="right carousel-control" href="#mega-slider" role="button" data-slide="next">
        </a>
    </div>
<?php echo $__env->yieldSection(); ?>

