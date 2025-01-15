@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-semibold mb-4">Voitures Disponibles</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($cars as $car)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">{{ $car->name }}</h2>
                    <p class="text-gray-500">{{ $car->brand }} - {{ $car->year }}</p>
                    <p class="text-lg font-semibold mt-2">Prix: {{ $car->price_per_day }} DHs / jour</p>
                    <a href="{{ route('cars.show', $car->id) }}" class="mt-4 inline-block text-blue-500 hover:text-blue-700">عرض التفاصيل</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection