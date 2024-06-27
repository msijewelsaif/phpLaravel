<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600&display=swap">
    <!-- Styles -->
    <style>
        /* Customize your styles here */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f3f4f6;
            /* Background animation */
            background-image: linear-gradient(to right, #f3f4f6, #ffffff, #f3f4f6);
            animation: gradientAnimation 15s ease infinite;
        }
        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
        }
        .card {
            width: 100%;
            max-width: 400px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
            margin: 20px;
        }
        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            font-size: 14px;
        }
        .form-submit {
            width: 100%;
            background-color: #1a202c;
            color: #ffffff;
            border: none;
            padding: 12px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .form-submit:hover {
            background-color: #2d3748;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="card">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
