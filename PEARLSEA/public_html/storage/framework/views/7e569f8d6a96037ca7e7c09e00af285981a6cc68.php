<?php $__env->startSection('news_section'); ?>
    <div class="mg-news-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="mg-sec-left-title"><?php echo e($constants['recentnews']['news']); ?></h2>
                    <ul class="mg-recnt-posts">
                        <?php foreach($news as $new): ?>

                            <li>
                                <div class="mg-recnt-post">
                                    <div class="mg-rp-date"><?php echo e(date('M d, Y', strtotime($new->created_date))); ?>

                                        <?php /*<div class="mg-rp-month"><?php echo e(date('F d, Y', strtotime($new->created_date))); ?></div>*/ ?>
                                    </div>
                                    <h3><a href="./news/<?php echo e($new->id); ?>"><?php echo e($new->title); ?></a></h3>
                                    <?php /*<?php echo e(Request::path()); ?>*/ ?>
                                    <p><?php echo $new ->introtext; ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-md-7">
                    <h2 class="mg-sec-left-title"><?php echo e($constants['recentnews']['gallery']); ?></h2>

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
            </div>
        </div>
    </div>
<?php echo $__env->yieldSection(); ?>
