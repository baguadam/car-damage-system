<x-guest-layout>
    <x-slot name="title">Details</x-slot>
    <h1 class="text-4xl mb-4 font-extrabold mr-5">Damage details</h1>
    <h2 class="mb-6 font-normal">You can see everything related to the clicked damage here. The table contains the details of
        the damage itself. The corresponding cars are displayed below the table with their pictures and details. In case of
        cars that don't exist in the database, a default picture is shown.
    </h2>

    <div class="border rounded-md shadow-lg mt-4 flex justify-center">
        <table class="table-auto mt-1">
            <thead class="uppercase text-left bg-stone-50 text-white">
                <tr>
                    <th class="px-6 py-3 text-gray-900">ID</th>
                    <th class="px-6 py-3 text-gray-900">Place</th>
                    <th class="px-6 py-3 text-gray-900">Date</th>
                    <th class="px-6 py-3 text-gray-900">Description</th>
                    <th class="px-6 py-3 text-gray-900 text-center">More</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <td class="px-6 py-4">{{ $damage->id }}</td>
                    <td class="px-6 py-4">{{ $damage->place }}</td>
                    <td class="px-6 py-4">{{ $damage->date }}</td>
                    <td class="px-6 py-4">{{ $damage->desc }}</td>
                    <td class="px-6 py-4">
                        <div class="flex">
                            <a href="{{ route('damages.edit', $damage) }}"
                               class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
                                Edit
                            </a>
                            <form action="{{ route('damages.destroy', $damage) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="flex flex-wrap justify-center border rounded-md shadow-lg bg-stone-50 mt-4">
        @foreach ($damage->vehicles()->get() as $vehicle)
            <div class="w-60 h-64 bg-white border border-gray-200 rounded-lg shadow m-4">
                <img class="h-[20%]" src="{{ asset('storage/images/' . $vehicle->img_hash_name) }}" alt="Picture of the related car" />

                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 p-3">
                    <div class="flex flex-col pb-2">
                        <dt class="mb-1 text-gray-500 md:text-lg">License plate</dt>
                        <dd class="text-md font-semibold">{{ $vehicle->license }}</dd>
                    </div>

                    <div class="flex flex-col pb-2">
                        <dt class="mb-1 text-gray-500 md:text-lg">Model/Type</dt>
                        <dd class="text-md font-semibold">{{ $vehicle->model }} - {{ $vehicle->type }}</dd>
                    </div>

                    <div class="flex flex-col pb-2">
                        <dt class="mb-1 text-gray-500 md:text-lg">Year</dt>
                        <dd class="text-md font-semibold">{{ $vehicle->year }}</dd>
                    </div>
                </dl>
            </div>
        @endforeach
    </div>
</x-guest-layout>
