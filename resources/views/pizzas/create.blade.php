@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1 class="">Create a new pizza</h1>
    
    <form action="/pizzas" method="POST">
    @csrf
        <label for="name"> Your name: </label>
        <input type="text" name="name" id="name">

        <label for="type"> Choose a pizza type: </label>
        <select id="type" name="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>

        <label for="base"> Choose a base type: </label>
        <select id="base" name="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>

        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection