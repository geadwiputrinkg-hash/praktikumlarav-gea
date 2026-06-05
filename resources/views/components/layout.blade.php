<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Home' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <x-navbar />

    <x-header>
        {{ $title ?? 'Home' }}
    </x-header>

    <main class="py-6">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

</body>
</html>