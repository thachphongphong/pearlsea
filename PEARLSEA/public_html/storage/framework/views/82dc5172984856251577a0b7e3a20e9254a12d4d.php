<?php $__env->startSection('content_section'); ?>
    <?php echo $__env->make('title_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="mg-about-features">
        <div class="container">
            <div class="row">
                <?php foreach($abouts as $ab): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <p><?php echo nl2br(e($ab ->content)); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <?php if($ab ->image_url != "" && is_array(explode(',', $ab ->image_url))): ?>
                            <?php if(count(explode(',', $ab ->image_url)) == 2): ?>
                                <?php foreach( explode(',', $ab ->image_url) as $url): ?>
                                    <div class="col-sm-6">
                                        <figure class="mg-room mg-room-col-2">
                                            <img src=" <?php echo e(asset($url)); ?>" alt="pearl sea hotel" class="img-responsive center-block">
                                        </figure>
                                    </div>
                                <?php endforeach; ?>
                            <?php elseif(count(explode(',', $ab ->image_url)) == 3): ?>
                                <?php foreach( explode(',', $ab ->image_url) as $url): ?>
                                    <div class="col-sm-4">
                                        <figure class="mg-room">
                                            <img src=" <?php echo e(asset($url)); ?>" alt="pearl sea hotel" class="img-responsive center-block">
                                        </figure>
                                    </div>
                                <?php endforeach; ?>
                            <?php elseif(count(explode(',', $ab ->image_url)) == 4): ?>
                                <?php foreach( explode(',', $ab ->image_url) as $url): ?>
                                    <div class="col-sm-3">
                                        <figure class="mg-room mg-room-col-4">
                                            <img src=" <?php echo e(asset($url)); ?>" alt="pearl sea hotel" class="img-responsive center-block">
                                        </figure>
                                    </div>
                                <?php endforeach; ?>
                            <?php elseif(count(explode(',', $ab ->image_url)) == 1): ?>
                                <div class="col-xs-12">
                                        <img src=" <?php echo e(asset($ab ->image_url)); ?>" alt="pearl sea hotel" class="img-responsive center-block">
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <hr/>
                <?php endforeach; ?>
                <?php /*  <div class="col-sm-4">
                      <div class="mg-feature">
                          <div class="mg-feature-icon-title">
                              <i class="fp-ht-maid"></i>
                              <h3>Room service</h3>
                          </div>
                          <p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="mg-feature">
                          <div class="mg-feature-icon-title">
                              <i class="fp-ht-computer"></i>
                              <h3>Wi-fi service</h3>
                          </div>
                          <p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="mg-feature">
                          <div class="mg-feature-icon-title">
                              <i class="fp-ht-parking"></i>
                              <h3>Free Parking</h3>
                          </div>
                          <p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
                      </div>
                  </div>*/ ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>