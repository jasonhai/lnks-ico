(function($) {

    function readURL1(input, type) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                if(type === 1) {
                    $('#doc1').attr('src', e.target.result);
                }
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#upload-doc").change(function() {
        if(this.files && this.files[0]) {
            var imgPath = this.files[0].name;
            var imgSize = this.files[0].size;
            var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

            if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg" || extn == "doc" || extn == "pdf" || extn == "doc" || extn == "docx") {
                if(imgSize <= 2000000) {
                    $("#file-name1").text(this.files[0].name);
                    if(extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                        readURL1(this, 1);
                    } else {
                        readURL1(this, 0);
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

    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#doc2').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#upload-photo-id").change(function() {
        if(this.files && this.files[0]) {
            var imgPath = this.files[0].name;
            var imgSize = this.files[0].size;
            var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

            if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                if(imgSize <= 2000000) {
                    $("#file-name2").text(this.files[0].name);
                    readURL2(this);
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

})(jQuery);