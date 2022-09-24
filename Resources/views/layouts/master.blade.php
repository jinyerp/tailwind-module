<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Tailwind</title>

        <link rel="stylesheet" href="{{ asset('css/markdown.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/github.min.css">
        @stack('css')

        <script src="//unpkg.com/alpinejs" defer></script>
        @livewireStyles

    </head>
    <body>
        @yield('content')

        <script src="https://jinyphp.github.io/css/assets/js/app.js" defer></script>

        <!-- 코드 하이라이트 -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
        <script>hljs.highlightAll();</script>

        @livewireScripts
        @stack('scripts')
    </body>
</html>
