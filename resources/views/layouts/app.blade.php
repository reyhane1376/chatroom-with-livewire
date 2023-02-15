<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/bootstrap/bootstrap.min.css') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <livewire:styles />
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @if(auth()->check())
        @include('layouts.navigation')
        @endif

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
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
    <livewire:scripts />
    <script src="{{ asset('admin-assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-assets/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function () {
        if (Notification.permission === "default") {
    Notification.requestPermission().then(perm => {
      if (Notification.permission === "granted") {
        regWorker().catch(err => console.error(err));
      } else {
        alert("Please allow notifications.");
      }
    });
  } 

                if (document.hasFocus()) {
                    Livewire.on('notification', data => {
                        if (Notification.permission !== 'granted')
                           Notification.requestPermission();
                         else {
                           var notification = new Notification(data['userName'] + ' say in ' + data['roomName'], {
                            body: data['message'],
                             });
                        notification.onclick = function() {
                         window.open('http://stackoverflow.com/a/13328397/1269037');
      };
     }
                    });
    
                }else{
    
                }
            })
    
    </script>
    @stack('scripts')
</body>

</html>