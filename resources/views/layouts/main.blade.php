<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body> 
    <div class="header">
        @include('blocks.menu')
    </div>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        This is footer
    </div>
</body>
</html>