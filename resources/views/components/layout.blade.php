<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <title>@yield('title') polianna.dev</title>
        <link href="{{ URL::asset('css/app.css') }}" rel='stylesheet'>
        @vite('resources/css/app.css')
    </head>
    <body class='bg-no-repeat 
    bg-top bg-custom bg-contain bg-scroll bg-pale-pink
    lg:bg-circle lg:bg-center lg:bg-contain lg:bg-fixed lg:bg-terra-cotta
    flex flex-col items-center m-0
    lg:grid lg:grid-cols-4 lg:items-start lg:justify-items-stretch lg:m-10
    font-sans font-normal text-woody-brown text-xl'>
        <main class='flex flex-col items-center gap-20
        lg:gap-28
        lg:col-span-2 lg:col-start-2 lg:justify-self-center'>
            <x-logo/>
            <x-h1>@yield('h1')</x-h1>
            @yield('content')
        </main>
        <x-nav/>
    </body>
</html>