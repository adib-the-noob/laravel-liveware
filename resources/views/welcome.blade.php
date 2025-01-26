<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased bg-gray-50">
        <div class="container mx-auto px-4">
            <main class="mt-6 max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-6">
                <!-- Color display element -->
                <div class="bg-blue-500 text-white p-4 rounded mb-6">
                    <p class="font-bold text-lg text-white">HackerOne</p>
                </div>
                
                <livewire:greeter />
            </main>
        </div>
    </body>
</html>
