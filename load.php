<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $("input").keyup(function() {
                var name = $("input").val();
                $.post("suggestions.php", {
                    suggestion: name
                }, function(data, status) {
                    $("#test").html(data);
                });
            });
        });
    </script>
</head>
<body>
    <input type="text" name="name">
    <p id="test"></p>
</body>
</html>