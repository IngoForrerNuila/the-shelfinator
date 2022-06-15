<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Shelfinator</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <a href='/index'>
        <div class="logo-container">
            <img class="logo" src="{{ asset('img/logo.png') }}">
        </div>
    </a>
    <video class="fullscreen-video" muted loop autoplay>
        <source src="{{ asset('img/stars.mp4') }}">
    </video>
</body>
</html>
