@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-semibold">{{ $car->name }}</h1>
        <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" class="w-full h-64 object-cover my-4">
        <p class="text-gray-500">{{ $car->brand }} - {{ $car->year }}</p>
        <p class="text-lg mt-4">{{ $car->description }}</p>
        <p class="text-xl font-semibold mt-4">السعر: {{ $car->price_per_day }} د.م / يوم</p>
        
        <form action="{{ route('bookings.store') }}" method="POST" class="mt-6">
            @csrf
            <input type="hidden" name="car_id" value="{{ $car->id }}">
            <div class="mb-4">
                <label for="customer_name" class="block text-sm font-semibold">اسم العميل</label>
                <input type="text" name="customer_name" id="customer_name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="start_date" class="block text-sm font-semibold">تاريخ البدء</label>
                <input type="date" name="start_date" id="start_date" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="end_date" class="block text-sm font-semibold">تاريخ الانتهاء</label>
                <input type="date" name="end_date" id="end_date" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">حجز السيارة</button>
        </form>
    </div>
</div>
@endsection