<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/assets/css/tailwindcssv3.css') }}">

    <style>
        /* Customize the splash screen styles here */
        .splash-screen {
            background-color: #3490dc; /* Change the background color */
            color: #fff; /* Change the text color */
            font-size: 24px;
        }
        .animate-bounce {
            animation: bounce 1s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-20px);
            }

            60% {
                transform: translateY(-10px);
            }
        }

        @keyframes dot-animation {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            75% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        .dot {
            display: inline-block;
            animation: dot-animation 1.5s infinite;
        }
        /* Customize any other styles as needed */
    </style>
</head>

<body class="antialiased">
    <div class="flex items-center justify-center min-h-screen splash-screen">
        <!-- Your splash screen content goes here -->
        <div class="text-center">
            
        </div>
    </div>
</body>
</body>

</html>
