<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="px-8 bg-blue-600">
        <nav class="flex justify-between items-center">
            <div>
                <img src="{{ asset('images/logo/1600w-JmYWTjUsE-Q.webp') }}" alt="logo image"
                    class="h-24 overflow-hidden">
            </div>
            <div>
                <ul class="flex justify-between gap-8 text-white">
                    <li>
                        <a href="/">Dashboard</a>
                    </li>
                    <li>
                        <a href="/category">Category</a>
                    </li>
                    <li>
                        <a href="/account">Account</a>
                    </li>
                </ul>
        </nav>
    </div>

    @yield('content')

    <div class="bg-blue-500 mt-16">

        Footer
    </div>
    @yield('scripts')
</body>

</html>
