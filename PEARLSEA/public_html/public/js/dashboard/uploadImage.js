function upload(controlId) {
    var form = document.forms.namedItem("upload_image"); // high importance!, here you need change "yourformname" with the name of your form
    var formdata = new FormData(form); // high importance!
    $.ajax({
        async: true,
        type: "POST",
        dataType: "json", // or html if you want...
        contentType: false, // high importance!
        url: DASH_BOARD_URL + '/upload', // you need change it.
        data: formdata, // high importance!
        processData: false, // high importance!
        success: function (res) {
            if(res.success){
                if(res.type == 'ABOUT'){
                      addImageAbout(res.data);
                }
                if(res.type == 'TOUR'){
                  addImageTour(res.data);
                }
                document.forms.namedItem("upload_image").reset();
            }
            dialogUpload.dialog("close");
        },
        error:function () {
            showMessage('Upload thất bại');
            document.forms.namedItem("upload_image").reset();
            dialogUpload.dialog("close");
        },
        timeout: 5000
    });
}

function replace(controlId, oldFile) {
    var form = document.forms.namedItem("upload_image"); // high importance!, here you need change "yourformname" with the name of your form
    var formdata = new FormData(form); // high importance!

    $.ajax({
        async: true,
        type: "POST",
        dataType: "json", // or html if you want...
        contentType: false, // high importance!
        url: DASH_BOARD_URL + '/upload/replace', // you need change it.
        data: formdata, // high importance!
        processData: false, // high importance!
        success: function (data) {
            dialogUpload.dialog("close");
            showMessage("Upload thành công");
            $('#' + controlId).val(data.data.img_src);
            $('#' + controlId + '_thumbnail').val(data.data.img_thumb);
            $('#' + controlId + '_src').attr('src', assetBaseUrl + data.data.img_src + "?t=" + new Date().getTime());
            document.forms.namedItem("upload_image").reset();
        }, error: function () {
            showMessage("Upload thất bại");
            document.forms.namedItem("upload_image").reset();
            dialogUpload.dialog("close");
        },
        timeout: 5000
    });
}
function uploadImage() {
    var type =  $("#typeName").val();
    if(type == "ROOM"){
         var controlId = $("#div_upload_image").data('controlId');
         replace(controlId, $('#filePath').val());
    }else if(type == "ABOUT" || type == "TOUR"){
        upload('');
    }else if(type == "GALLERY"){
        var typeRoom = $("#g_room_type").val();
        uploadGallery(typeRoom);
    }
}

function uploadGallery(typeRoom){
    var form = document.forms.namedItem("upload_image"); // high importance!, here you need change "yourformname" with the name of your form
    var formdata = new FormData(form); // high importance!
    $.ajax({
        async: true,
        type: "POST",
        dataType: "json", // or html if you want...
        contentType: false, // high importance!
        url: DASH_BOARD_URL + '/upload', // you need change it.
        data: formdata, // high importance!
        processData: false, // high importance!
        success: function (res) {
            getImages();
            document.forms.namedItem("upload_image").reset();
            dialogUpload.dialog("close");
        },
        error:function () {
            showMessage('Upload thất bại');
            document.forms.namedItem("upload_image").reset();
            dialogUpload.dialog("close");
        },
        timeout: 5000
    });
}