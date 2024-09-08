@extends('layouts.app')

@section('title', 'Vehicles List')

@section('content')

    <h1 class="text-2xl font-bold mb-4">Vehicles List</h1>


    <body>
        <div class="container mx-auto p-4">
            <div class="flex flex-wrap gap-6 justify-center">
                @foreach ($vehicles as $vehicle)
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $vehicle->brand }}</h5>
                        </a>

                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $vehicle->price }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $vehicle->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </body>

@endsection
