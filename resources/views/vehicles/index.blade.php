@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Id:{{$type->id}}</h1>
    <h2>Name:{{$type->name}}</h2>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Registration</th>
                <th>Brand</th>
                <th>Model</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($type->vehicles as $vehicle)
            <tr>
                <td>{{ $vehicle->id }}</td>
                <td>{{ $vehicle->registration }}</td>
                <td>{{ $vehicle->brand }}</td>
                <td>{{ $vehicle->model }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
