@php
    use Illuminate\Support\Facades\Auth;
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Car Damage System - {{ $title ?? "Guest" }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-[70%] mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg max mb-4">
                <nav class="bg-white border-gray-200 dark:bg-gray-900 mb-5">
                    <div class="flex justify-between bg-white">
                      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                        <li>
                            <a href="{{ route('damages.index') }}" class="block py-2 px-3 md:p-0 text-gray-900 text-lg md:hover:bg-transparent hover:text-blue-600">Home</a>
                        </li>
                        @auth
                            <li>
                                <a href="{{ route('histories.index') }}" class="block py-2 px-3 md:p-0 text-gray-900 text-lg md:hover:bg-transparent hover:text-blue-600">Search histories</a>
                            </li>
                            @if (Auth::user()->isAdmin)
                                <li>
                                    <a href="{{ route('vehicles.create') }}" class="block py-2 px-3 md:p-0 text-gray-900 text-lg md:hover:bg-transparent hover:text-blue-600">Create new vehicle</a>
                                </li>
                                <li>
                                    <a href="{{ route('damages.create') }}" class="block py-2 px-3 md:p-0 text-gray-900 text-lg  md:hover:bg-transparent hover:text-blue-600">Create new damage</a>
                                </li>
                                <li>
                                  <a href="{{ route('users.index') }}" class="block py-2 px-3 md:p-0 text-gray-900 text-lg  md:hover:bg-transparent hover:text-blue-600">Edit rank</a>
                                </li>
                            @endif
                        @endauth
                      </ul>
                      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 bordermd:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                            @auth
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="block px-4 py-2 rounded-lg text-white text-lg md:hover:bg-transparent hover:text-blue-600 bg-blue-700">Logout</button>
                                    </form>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}" class="mr-4 block px-4 py-1 rounded-lg text-white text-lg md:hover:bg-transparent hover:text-blue-600 bg-blue-700">Login</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}" class="block px-4 py-1 rounded-lg text-white text-lg md:hover:bg-transparent hover:text-blue-600 bg-blue-700">Register</a>
                                </li>
                            @endauth
                       </ul>
                    </div>
                </nav>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
