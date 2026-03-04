<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catch All</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-8">
    <div class="bg-white rounded-xl shadow p-6 w-full max-w-md">
        <ul class="divide-y divide-gray-100">
            <li class="py-3 flex justify-between">
                <span class="text-xs font-semibold uppercase tracking-wide text-gray-400">Current Route</span>
                <span class="text-sm text-gray-800">{{ $currentRoute }}</span>
            </li>
            <li class="py-3 flex justify-between">
                <span class="text-xs font-semibold uppercase tracking-wide text-gray-400">Route Name</span>
                <span class="text-sm text-gray-800">{{ $routeName }}</span>
            </li>
            @if ($routeParams)
                @foreach ($routeParams as $key => $value)
                    <li class="py-3 flex justify-between">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-400">{{ $key }}</span>
                        <span class="text-sm text-gray-800">{{ $value }}</span>
                    </li>
                @endforeach
            @endif
        </ul>
        <a href="{{ $backRoute }}" class="mt-4 inline-block text-sm text-indigo-600 hover:text-indigo-800">&larr; Back</a>
    </div>
</body>
</html>
