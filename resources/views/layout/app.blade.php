<!DOCTYPE html>
<html>
    <head lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>@yield("title")</title>
        @stack("styles")
        @stack("scripts")
    </head>
    <body>
        @include("layout.header")
        <main>
            @yield("content")
        </main>
        @include("layout.footer")
    </body>
</html>