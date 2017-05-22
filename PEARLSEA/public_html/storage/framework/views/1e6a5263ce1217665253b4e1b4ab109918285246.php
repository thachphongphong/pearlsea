
<?php $__env->startSection('content_section'); ?>
    <?php echo $__env->make('title_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="mg-blog-list">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <main>
                        <?php foreach($news as $new): ?>
                            <article class="mg-post">
                                <header>
                                    <?php if($new->image_url): ?>
                                        <a href="<?php echo e(Request::url()); ?>/<?php echo e($new->id); ?>"><img src="<?php echo e($new->image_url); ?>" alt=""
                                                                                         class="img-responsive"></a>
                                    <?php endif; ?>
                                    <h2 class="mg-post-title"><a href="./news/<?php echo e($new->id); ?>" rel="bookmark"><?php echo e($new->title); ?></a></h2>

                                    <div class="mg-post-meta">
                                        <span><a href="<?php echo e(Request::url()); ?>/<?php echo e($new->id); ?>"><?php echo e(date('F d, Y', strtotime($new->created_date))); ?></a></span>
                                        <span>by <a href="#">Admin</a></span>
                                    </div>
                                </header>
                                <div>
                                    <?php echo html_entity_decode($new->introtext); ?>

                                </div>
                                <footer class="clearfix">
                                    <a href="<?php echo e(Request::url()); ?>/<?php echo e($new->id); ?>" class="mg-read-more">Continue Reading <i
                                                class="fa fa-long-arrow-right"></i></a>
                                </footer>
                            </article>
                        <?php endforeach; ?>
                    </main>
                </div>

            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>