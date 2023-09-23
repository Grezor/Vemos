<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>
<body>
    <div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-purple-500 px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
        <div class="flex items-center gap-x-4 gap-y-2">
            <p class="text-sm leading-6 text-gray-900">
                <strong class="font-semibold">Vamos 2023</strong>
            </p>
        </div>
    </div>
</body>
</html>
