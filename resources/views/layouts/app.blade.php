<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

</head>

<body class="font-sans antialiased">

    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '595803342165827',
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v16.0'
            });
        };
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>


    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')



    <script>
        // if (FB instanceof Object
        // ) {
        //     // Ask the user for permissions
        //     FB.login(function(response) {
        //         if (response.authResponse) {
        //             console.log('User granted permissions!');
        //         } else {
        //             console.log('User declined permissions.');
        //         }
        //     }, {
        //         scope: 'pages_manage_posts'
        //     });
        // }
    </script>
    @livewireScripts
</body>

</html>
