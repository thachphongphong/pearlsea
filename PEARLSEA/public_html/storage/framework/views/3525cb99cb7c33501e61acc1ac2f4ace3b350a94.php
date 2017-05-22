
<?php $__env->startSection('content'); ?>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mg-tab-left-nav mb80">

                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home4" aria-controls="home4" role="tab" data-toggle="tab">
                                    <i class="fa fa-home"></i>
                                    Home
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">
                                    <i class="fa fa-info"></i>
                                    Liên Hệ
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#introduce" aria-controls="introduce" role="tab" data-toggle="tab">
                                    <i class="fa fa-hotel"></i>
                                    Giới Thiệu
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#article" aria-controls="article" role="tab" data-toggle="tab">
                                    <i class="fa fa-pencil"></i>
                                    Thêm tin tức
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#list_article" aria-controls="list_article" role="tab" data-toggle="tab">
                                    <i class="fa fa-pencil"></i>
                                    Quản lí tin
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#edit_room" aria-controls="edit_room" role="tab" data-toggle="tab">
                                    <i class="fa fa-cogs"></i>
                                    Sửa phòng
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#list_bookings" aria-controls="booking" role="tab" data-toggle="tab">
                                    <i class="fa fa-list-ul"></i>
                                    Booking
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#tour" aria-controls="tour" role="tab" data-toggle="tab">
                                    <i class="fa fa-list-ul"></i>
                                    Tour
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#promotion" aria-controls="promotion" role="tab" data-toggle="tab">
                                    <i class="fa fa-star"></i>
                                    Khuyến mãi
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home4">
                                <h1>Trang quản trị hệ thống khách sạn Pearl Sea</h1>
                            </div>
                            <?php echo $__env->make('auth.admin.contact_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <div role="tabpanel" class="tab-pane fade" id="introduce">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="mg-sec-left-title">Giới thiệu</h2>
                                        <div class="form-group">
                                            <label for="language">Ngôn ngữ hiện thị</label>
                                            <label><input type="radio" name="a_lang_radio" value="1" checked="">Tiếng Việt</label>
                                            <label><input type="radio" name="a_lang_radio" value="2">Tiếng Anh</label>
                                        </div>
                                        <div id="intro-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="list_article">
                                <h2 class="mg-sec-left-title">Danh sách tin</h2>
                               <div id="list_news"></div>
                            </div>

                            <?php echo $__env->make('auth.admin.article_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('auth.admin.edit_room_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php /*<?php echo $__env->make('auth.admin.booking', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>*/ ?>
                            <div role="tabpanel" class="tab-pane fade" id="list_bookings">
                                <h2 class="mg-sec-left-title">Danh sách tin</h2>
                                <div id="list_bookings"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tour">
                                <h2 class="mg-sec-left-title">Tours</h2>
                                <div class="form-group">
                                    <label for="language">Ngôn ngữ hiện thị</label>
                                    <label><input type="radio" name="t_lang_radio"  value="1" checked="">Tiếng Việt</label>
                                    <label><input type="radio" name="t_lang_radio"  value="2">Tiếng Anh</label>
                                </div>
                                <div id="list-tours"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="promotion">
                                <h2 class="mg-sec-left-title">Khuyến mãi</h2>
                                <div class="form-group">
                                    <label for="language">Ngôn ngữ hiện thị</label>
                                    <label><input type="radio" name="p_lang_radio"  value="1" checked="">Tiếng Việt</label>
                                    <label><input type="radio" name="p_lang_radio"  value="2">Tiếng Anh</label>
                                </div>
                                <div id="list-promotion"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="dialog-message" title="Thông báo">
            <p id="msg_content"></p>
        </div>
        <div id="dialog-confirm" title="Xóa">
            <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>Bạn có muốn xóa hay
                không?</p>
        </div>
    </div>
    <script type="text/javascript">
        var DASH_BOARD_URL = '<?php echo e(URL('vi/admin/dashboard')); ?>';
        var assetBaseUrl = "<?php echo e(asset('')); ?>";
    </script>
    <div id="div_upload_image" title="Upload hình ảnh">
        <form name="upload_image" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <fieldset>
                <label for="image">Chọn hình ảnh cần upload</label>
                <input type="file" name="image" class="btn btn-primary ui-widget-content ui-corner-all">
                <input type="text" id="filePath" name="filePath" class="text ui-widget-content ui-corner-all" value=""
                       hidden>
                <input type="hidden" id="typeName" name="typeName" value="">
                <!-- Allow form submission with keyboard without duplicating the dialog button -->
                <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
            </fieldset>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>