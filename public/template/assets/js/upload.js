(function($) {

    function readURL(input, type, id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                if(type === 1) {
                    $(id).attr('src', e.target.result);
                }
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    // function uploadProcess(clsNotifi, clsFilename, clsDoc) {
    // 	if(this.files && this.files[0]) {
    // 		var imgPath = this.files[0].name;
    // 		var imgSize = this.files[0].size;
    // 		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    //
    // 		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg" || extn == "doc" || extn == "pdf" || extn == "doc" || extn == "docx") {
    // 			if(imgSize <= 2000000) {
    // 				$(clsFilename).text(this.files[0].name);
    // 				if(extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
    // 					readURL(this, 1, clsDoc)
    // 				} else {
    // 					readURL(this, 0, clsDoc)
    // 				}
    //
    // 			} else {
    // 				$(clsNotifi).show();
    // 				$(clsNotifi).html('The maximum upload file size 2MB');
    // 				setTimeout(function () {
    // 					$(clsNotifi).hide();
    // 					$(clsNotifi).html('');
    // 				}, 2000);
    // 				$(clsFilename).text('');
    // 				$(clsDoc).removeAttr('src');
    // 			}
    //
    // 		} else {
    // 			$(clsNotifi).show();
    // 			$(clsNotifi).html('Unable to upload a file: This file type is not supported');
    // 			setTimeout(function () {
    // 				$(clsNotifi).hide();
    // 				$(clsNotifi).html('');
    // 			}, 2000);
    // 			$(clsFilename).text('');
    // 			$(clsDoc).removeAttr('src');
    // 		}
    // 	} else {
    // 		$(clsNotifi).hide();
    // 		$(clsNotifi).html('');
    // 		$(clsFilename).text('');
    // 		$(clsDoc).removeAttr('src');
    // 	}
    // }

    $("#upload-doc").change(function() {
        // 	uploadProcess(".notification1", "#file-name1", "#doc1");
        if(this.files && this.files[0]) {
            var imgPath = this.files[0].name;
            var imgSize = this.files[0].size;
            var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

            if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg" || extn == "doc" || extn == "pdf" || extn == "doc" || extn == "docx") {
                if(imgSize <= 2000000) {
                    $("#file-name1").text(this.files[0].name);
                    if(extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                        readURL(this, 1, "#doc1")
                    } else {
                        readURL(this, 0, "#doc1")
                    }

                } else {
                    $('.notification1').show();
                    $('.notification1').html('The maximum upload file size 2MB');
                    setTimeout(function () {
                        $('.notification1').hide();
                        $('.notification1').html('');
                    }, 2000);
                    $("#file-name1").text('');
                    $('#doc1').removeAttr('src');
                }

            } else {
                $('.notification1').show();
                $('.notification1').html('Unable to upload a file: This file type is not supported');
                setTimeout(function () {
                    $('.notification1').hide();
                    $('.notification1').html('');
                }, 2000);
                $("#file-name1").text('');
                $('#doc1').removeAttr('src');
            }
        } else {
            $('.notification1').hide();
            $('.notification1').html('');
            $("#file-name1").text('');
            $('#doc1').removeAttr('src');
        }
    });

    $("#upload-photo-id").change(function() {
        if(this.files && this.files[0]) {
            var imgPath = this.files[0].name;
            var imgSize = this.files[0].size;
            var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

            if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                if(imgSize <= 2000000) {
                    $("#file-name2").text(this.files[0].name);
                    // readURL2(this);
                    readURL(this, 1, "#doc2")
                } else {
                    $('.notification2').show();
                    $('.notification2').html('The maximum upload file size 2MB');
                    setTimeout(function () {
                        $('.notification2').hide();
                        $('.notification2').html('');
                    }, 2000);
                    $("#file-name2").text('');
                    $('#doc2').removeAttr('src');
                }

            } else {
                $('.notification2').show();
                $('.notification2').html('Unable to upload a file: This file type is not supported');
                setTimeout(function () {
                    $('.notification2').hide();
                    $('.notification2').html('');
                }, 2000);
                $("#file-name2").text('');
                $('#doc2').removeAttr('src');
            }
        } else {
            $('.notification2').hide();
            $('.notification2').html('');
            $("#file-name2").text('');
            $('#doc2').removeAttr('src');
        }
    });

    $("#upload-avatar").change(function() {
        if(this.files && this.files[0]) {
            var imgPath = this.files[0].name;
            var imgSize = this.files[0].size;
            var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

            if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                if(imgSize <= 2000000) {
                    $("#file-name3").text(this.files[0].name);
                    readURL3(this);
                    readURL(this, 1, "#avatar-image")
                } else {
                    $('.notification3').show();
                    $('.notification3').html('The maximum upload file size 2MB');
                    setTimeout(function () {
                        $('.notification3').hide();
                        $('.notification3').html('');
                    }, 2000);
                    $("#file-name3").text('');
                    $('#avatar-image').removeAttr('src');
                }

            } else {
                $('.notification3').show();
                $('.notification3').html('Unable to upload a file: This file type is not supported');
                setTimeout(function () {
                    $('.notification3').hide();
                    $('.notification3').html('');
                }, 2000);
                $("#file-name3").text('');
                $('#avatar-image').removeAttr('src');
            }
        } else {
            $('.notification3').hide();
            $('.notification3').html('');
            $("#file-name3").text('');
            $('#avatar-image').removeAttr('src');
        }
    });

})(jQuery);
