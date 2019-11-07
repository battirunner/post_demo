<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>{{__('Post')}}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        
        @yield('extraCSS')
    </head>
    <body class="container-fluid text-center" style="margin: 1px 8.5vw!important;">
            @yield('content')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        @yield('extraJS')
    </body>
</html>
