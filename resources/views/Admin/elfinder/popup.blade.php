<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Manager</title>
    <link rel="stylesheet" href="/path/to/elfinder/css/elfinder.min.css">
    <link rel="stylesheet" href="/path/to/elfinder/css/theme.css">
</head>
<body>
<div id="elfinder"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/path/to/elfinder/js/elfinder.min.js"></script>
<script>
    $(document).ready(function() {
        $('#elfinder').elfinder({
            url: '/admin/file-manager/connector',
            getFileCallback: function(file) {
                if (window.opener && window.opener.processSelectedFile) {
                    window.opener.processSelectedFile(file.url);
                    window.close();
                }
            }
        }).elfinder('instance');
    });
</script>
</body>
</html>
