<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <input id="pokai" type="text">
    <button onclick="shit()"></button>
    <script>
        function shit() {
            $.ajax({
                url: $('#id')[0].value,
                method: 'GET'
            }).then(res => {
                console.log(res)
            }).fail(err => {
                console.log(err);
            })
        }
    </script>
</body>
</html>