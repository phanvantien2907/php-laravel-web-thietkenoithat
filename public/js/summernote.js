function openElFinder() {
    let elfinderUrl = '/admin/file-manager';

    window.open(elfinderUrl, 'File Manager', 'width=900,height=600');

    window.addEventListener('message', function (event) {
        if (event.origin !== window.location.origin) return; // Chặn nguồn lạ

        // Nhận đường dẫn ảnh từ elFinder và gán vào input
        if (event.data && event.data.url) {
            document.getElementById('image').value = event.data.url;
        }
    }, false);
}


$(document).ready(function() {
    $('#summernote').summernote({
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video', 'elfinder']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ],
        callbacks: {
            onImageUpload: function(files) {
                for (let i = 0; i < files.length; i++) {
                    uploadImage(files[i]);
                }
            }
        }
    });

    function uploadImage(file) {
        let formData = new FormData();
        formData.append("file", file);

        $.ajax({
            url: '/public/files', // Thay đổi endpoint tùy theo cấu hình của bạn
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(response) {
                $('#summernote').summernote('insertImage', response.url);
            }
        });
    }

    $('#summernote').on('summernote.image.upload', function (we, files) {
        openElFinder();
    });


});
