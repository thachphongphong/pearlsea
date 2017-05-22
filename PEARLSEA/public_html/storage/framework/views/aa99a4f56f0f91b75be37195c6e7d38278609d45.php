<table class="table table-hover table-bordered table-condensed">
    <thead>
    <tr class="success">
        <th>Tiêu đề</th>
        <th>Tóm tắt nội dung</th>
        <th>Ngôn ngữ</th>
        <th colspan="2">Chỉnh sửa</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 0; ?>
    <?php foreach($news as $new): ?>
        <?php $i++; ?>
        <?php if($i%2==1): ?>
            <tr class="info">
        <?php else: ?>
            <tr>
                <?php endif; ?>
                <td><?php echo e($new->title); ?></td>
                <td><?php echo e($new->introtext); ?></td>
                <?php if($new->language_id==1): ?>
                    <td>Tiếng Việt</td>
                <?php else: ?>
                    <td>Tiếng Anh</td>
                <?php endif; ?>
                <td><input type="button" class="btn btn-danger" value="Sửa" onclick="update_news(<?php echo e($new->id); ?>);"/></td>
                <td><input type="button" class="btn btn-danger" value="Xóa" onclick="delete_news(<?php echo e($new->id); ?>);"/></td>
            </tr>
            <?php endforeach; ?>

    </tbody>
</table>
<div>
    <div style="text-align:center;" class="news"><?php echo e($news->links()); ?></div>
</div>
<div class="modal fade" tabindex="-1" id="editNewsModal" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <script type="text/javascript" src="<?php echo e(asset('/js/tinymce/tinymce.min.js')); ?>"></script>
    <script>
        tinymce.init({
            mode: "specific_textareas",
            editor_selector: /(mceEditor|mceRichText)/,
            statusbar:  false,
            menubar:    false,
            plugins: ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | " +
            "bullist numlist outdent indent | link image"
        });
        $(document).on('focusin', function(e) {
            if ($(e.target).closest(".mce-window").length) {
                e.stopImmediatePropagation();
            }
        });
    </script>

    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cập nhật tin tức</h4>
            </div>
            <div id="editNewsContent"  class="modal-body">
                <?php echo $__env->make("auth.admin.edit_article_section", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="modal-footer">
                <input type="button" id='btn-update-news'  class="btn btn-success right" value="Cập nhật"/>
                <input type="button" id='btn-news-cancel'  class="btn btn-default right" data-dismiss="modal" value="Hủy bỏ"/>
            </div>
        </div>

    </div>
</div>