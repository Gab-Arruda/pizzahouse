@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen sm:items-center">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="title m-b-md">
            <div>Pizza List</div>
        </div>
    @foreach ($pizzas as $pizza)
        <div>
            {{$pizza->name}} {{$pizza->type}} - {{$pizza->base}}
        </div>
    @endforeach
    </div>
</div>
@endsection