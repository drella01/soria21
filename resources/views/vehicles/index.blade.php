@extends('layouts.app')
@section('content')
<div class="container">
    <h1>TYPE:{{$type->name}}</h1>
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
            @forelse ($type->vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td><a href="{{ route('vehicles.show', $vehicle) }}">{{ $vehicle->registration }}</a></td>
                    <td>{{ $vehicle->brand }}</td>
                    <td>{{ $vehicle->model }}</td>
                </tr>
            @empty
                <tr>
                    <td>NO WEHICLES AVALIABLE</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
