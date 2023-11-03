<x-guest-layout>
    <x-slot name="title">Car Damage System</x-slot>
    <div class="inline-flex justify-center items-center">
        <h1 class="text-4xl mb-4 font-extrabold mr-5">Car Damage System</h1>
        <h2 class="mb-6 font-normal">Welcome to Car Damage System. Are you looking for damages related to a car? Are you here to report a new accident?
            You are at the right place!</h2>
    </div>

    <form method="GET">
        <label for="default-search" class="mb-2 text-sm font-medium text-white">Search for license plate:</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for license plate..." required>
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
        </div>
    </form>
</x-guest-layout>