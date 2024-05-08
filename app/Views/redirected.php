<!DOCTYPE html>
<html>
<head>
    <title>New Page</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <script>
    $(document).ready(function() {
        // Retrieve the data from the session storage
        var data = JSON.parse(sessionStorage.getItem('apiData'));

        // Display the data
        $('body').append('<pre>' + JSON.stringify(data, null, 2) + '</pre>');
    });
    </script>

</body>
</html>
