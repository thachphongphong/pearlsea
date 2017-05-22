function getImages(){
	 waitingDialog.show("Đang tải hình ảnh....");
    $.ajax({
        url: DASH_BOARD_URL + '/gallery/load',
        dataType: 'json',
    }).done(function (data) {
        $('#list_images').html(data);
        rerenderGallery();
        waitingDialog.hide();
    }).fail(function () {
        waitingDialog.hide();
        showMessage('Không thể tải hình ảnh');
    });
    waitingDialog.hide();
    setTimeout(function(){
         rerenderGallery();
   },2000);
}

function rerenderGallery(){
     /*
     * Nivo Lightbox for gallery
     */
    $('.mg-gallery-item a').nivoLightbox({effect: 'fadeScale'});
	
	/*
	 * Gallery Filter with Shuffle
	 */
	var $grid = $('#mg-grid'),
		$sizer = $grid.find('.shuffle__sizer'),
		$filterType = $('#mg-filter input[name="filter"]');

	$grid.shuffle({
		itemSelector: '.mg-gallery-item',
		sizer: $sizer
	});

	$grid.shuffle('shuffle', $('#mg-filter input[name="filter"]:checked').val());

	$('label.btn-main').removeClass('btn-main');
	$('input[name="filter"]:checked').parent().addClass('btn-main');

	$filterType.change(function(e) {
		var group = $('#mg-filter input[name="filter"]:checked').val();

		$grid.shuffle('shuffle', group);

		$('label.btn-main').removeClass('btn-main');
		$('input[name="filter"]:checked').parent().addClass('btn-main');
	});


	/*
	 * Preloader
	 */

	$('.preloader').fadeOut("slow");
}