<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('checkout.title') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900">

    <div x-data="{ message: 'Alpine.js is working!' }" class="p-8">
        <h1 class="text-2xl font-bold" x-text="message"></h1>
        <p class="mt-2 text-gray-600">Tailwind CSS is working too.</p>
    </div>

</body>
</html>
