<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token", content="{{ csrf_token() }}">
    <title>Create Push Notification</title>
    <?php header('Access-Control-Allow-Origin: *'); ?>
    @vite('resources/js/app.js')

</head>
<body>
    <div id="app">
        <h1>Create Push Notification</h1>
    </div>
</body>
</html>