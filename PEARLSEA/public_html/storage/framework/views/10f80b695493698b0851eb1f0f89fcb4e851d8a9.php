<?php $__env->startSection('content_section'); ?>
<?php echo $__env->make('title_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="mg-gallery-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="mg-filter">
					<form id="mg-filter">
						<fieldset>
							<label class="btn btn-dark btn-main"><input type="radio" name="filter" value="all" checked="checked">All</label>
							<label class="btn btn-dark"><input type="radio" name="filter" value="1">STANDARD</label>
							<label class="btn btn-dark"><input type="radio" name="filter" value="2">SUPERIOR DOUBLE</label>
							<label class="btn btn-dark"><input type="radio" name="filter" value="3">SUPERIOR TRIPLE</label>
							<label class="btn btn-dark"><input type="radio" name="filter" value="4">DELUXE DOUBLE</label>
							<label class="btn btn-dark"><input type="radio" name="filter" value="5">DELUXE TRIPLE</label>
						</fieldset>
					</form>
				</div>

				<div class="row" id="mg-grid">
					<?php foreach($images as $image): ?>
                        <figure class="col-md-3 mg-gallery-item" data-groups='["<?php echo e($image -> room_id); ?>"]'>
							<a href="<?php echo e(asset($image -> url)); ?>" data-lightbox-gallery="rooms"><img src="<?php echo e(asset($image -> url)); ?>" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
						</figure>
                    <?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>