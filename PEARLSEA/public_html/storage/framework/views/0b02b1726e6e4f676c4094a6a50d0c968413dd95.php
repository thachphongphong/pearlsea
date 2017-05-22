<form id="introduction">
    <?php foreach($abouts as $ab): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="mg-contact-form-input">
                    <textarea class="form-control" rows="5"><?php echo e($ab ->content); ?></textarea>
                    <input type="button" onclick="saveAbout(this);" content-id="<?php echo e($ab ->id); ?>" lang-id="<?php echo e($ab ->language_id); ?>" class="btn btn-xs btn-primary" value="Save">  
                </div>                
            </div>
        </div>
        <div class="row">
            <?php if($ab ->image_url != "" && is_array(explode(',', $ab ->image_url))): ?>
                <?php if(count(explode(',', $ab ->image_url)) == 2): ?>
                    <?php foreach( explode(',', $ab ->image_url) as $url): ?>
                        <div class="col-sm-6">
                            <div class="mg-contact-form-input">
                                <img id="img-<?php echo e($ab ->id); ?>" src="<?php echo e(asset($url)); ?>" alt="pearl sea hotel" class="img-responsive center-block">  
                                <input type="button" onclick="openConfirm(this);" img-url="<?php echo e($url); ?>" content-id="<?php echo e($ab ->id); ?>" lang-id="<?php echo e($ab ->language_id); ?>" class="btn btn-xs  btn-danger" value="Delete">
                           </div>                
                       </div>
                    <?php endforeach; ?>
                <?php elseif(count(explode(',', $ab ->image_url)) == 3): ?>
                    <?php foreach( explode(',', $ab ->image_url) as $url): ?>
                        <div class="col-sm-4">
                             <div class="mg-contact-form-input">
                                <img id="img-<?php echo e($ab ->id); ?>" src=" <?php echo e(asset($url)); ?>" alt="pearl sea hotel" class="img-responsive center-block">
                                <input type="button" onclick="openConfirm(this);" img-url="<?php echo e($url); ?>" content-id="<?php echo e($ab ->id); ?>" lang-id="<?php echo e($ab ->language_id); ?>" class="btn btn-xs btn-xsn btn-danger" value="Delete">
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php elseif(count(explode(',', $ab ->image_url)) == 4): ?>
                    <?php foreach( explode(',', $ab ->image_url) as $url): ?>
                        <div class="col-sm-3">
                        <div class="mg-contact-form-input">
                            <img id="img-<?php echo e($ab ->id); ?>" src=" <?php echo e(asset($url)); ?>" alt="pearl sea hotel" class="img-responsive center-block">
                            <input type="button" onclick="openConfirm(this);" img-url="<?php echo e($url); ?>" content-id="<?php echo e($ab ->id); ?>" lang-id="<?php echo e($ab ->language_id); ?>" class="btn btn-xs btn-danger" value="Delete">
                        </div>
                        </div>
                    <?php endforeach; ?>
                <?php elseif(count(explode(',', $ab ->image_url)) == 1): ?>
                    <div class="col-xs-12">
                    <div class="mg-contact-form-input">
                            <img id="img-<?php echo e($ab ->id); ?>" src=" <?php echo e(asset($ab ->image_url)); ?>" alt="pearl sea hotel" class="img-responsive center-block">
                            <input type="button" onclick="openConfirm(this);" img-url="<?php echo e($ab ->image_url); ?>" content-id="<?php echo e($ab ->id); ?>" lang-id="<?php echo e($ab ->language_id); ?>" class="btn btn-xs btn-danger" value="Delete">
                    </div>
                    </div>
                <?php endif; ?>
                 <input type="button" onclick="openUploadImageAbout(this);" content-id="<?php echo e($ab ->id); ?>" lang-id="<?php echo e($ab ->language_id); ?>" class="btn btn-xs  btn-primary" value="Add"> 
            <?php endif; ?>
        </div>
        <hr/>
    <?php endforeach; ?>    
</form>