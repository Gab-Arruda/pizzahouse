@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="content flex-column-center">
        <img src="img/pizza-house.png" alt="Pizza House Logo">
        <div class="title m-b-md">
            <div>The North's Best Pizzas</div>
        </div>
        <p class="mssg">{{session('mssg')}}</p>
        <a href="/pizzas/create">Order a pizza</a>
    </div>
</div>
@endsection