
<div class="mg-page-title parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('book_now_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content_section'); ?>
    <div class="mg-blog-list">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <main>
                        <article class="mg-post">
                            <header>
                                <a href="#"><img src="<?php echo e($news->image_url); ?>" alt="" class="img-responsive"></a>
                                <h2 class="mg-post-title"><?php echo e($news->title); ?></h2>

                                <div class="mg-post-meta">
                                    <span><a href="#"><?php echo e(date('F d, Y', strtotime($news->created_date))); ?></a></span>
                                </div>
                            </header>
                            <div>
                                <?php echo html_entity_decode($news->fulltext); ?>

                            </div>
                            <footer class="clearfix">
                                <div class="mg-single-post-tags tagcloud">
                                    <a href="#" rel="tag"><?php echo e($news->alias); ?></a>
                                </div>
                            </footer>
                        </article>
                    </main>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>