@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen sm:items-center">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="title m-b-md">
            <div>Pizza List</div>
        </div>
    @foreach ($pizzas as $pizza)
        <div>
            <h4><a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}'s Pizza: {{$pizza->type}}</a></h4>
        </div>
    @endforeach
    </div>
</div>
@endsection