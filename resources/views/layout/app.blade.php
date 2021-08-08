<!DOCTYPE html>
<html>
    <head lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>@yield("title")</title>
        <link href="/css/layout/layout.css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> 
        <script src="https://kit.fontawesome.com/6f089298a1.js"></script>
        @stack("scripts")
        @stack("styles")
    </head>
    <body>
        @include("layout.header")
        <main>
            @yield("content")
        </main>
        @include("layout.footer")
    </body>
</html>