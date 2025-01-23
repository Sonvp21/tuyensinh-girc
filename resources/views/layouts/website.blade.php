<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="app-url" content="{{ config('app.url') }}">
    <link rel="shortcut icon" href="{{ asset('home/logo GIRC.jpg') }}" type="image/x-icon" />
    <link rel="icon" href="{{ asset('home/logo GIRC.jpg') }}" type="image/x-icon" />
    <title>{{ config('app.name', 'Gạo Krông Ana') }}</title>
    <meta name="description"
        content="Trung tâm nghiên cứu Địa tin học - Trường đại học Nông lâm Thái Nguyên, đại học Thái Nguyên thông báo tuyển sinh đại học năm học 2025.">
    <link href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
    <script src="{{ asset('home/index.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('home/index.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="h-auto bg-white font-sans text-black antialiased">
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <x-admin.alerts.toast />

    @stack('bottom_scripts')
</body>

</html>
