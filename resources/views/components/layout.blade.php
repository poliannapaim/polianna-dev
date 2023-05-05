<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <title>@yield('title') polianna.dev</title>
        <link href="{{ asset('css/app.css') }}" rel='stylesheet'>
        @vite('resources/css/app.css')
    </head>
    <body class='bg-terra-cotta bg-circle bg-center bg-no-repeat bg-fixed bg-contain
    grid grid-cols-4 justify-items-stretch m-14 
    font-sans font-normal text-woody-brown text-xl'>
        <main class='col-span-2 col-start-2 justify-self-center
        flex flex-col items-center gap-28'>
            <x-logo/>
            <x-h1>@yield('h1')</x-h1>
            @yield('content')
        </main>
        <x-nav/>
    </body>
</html>