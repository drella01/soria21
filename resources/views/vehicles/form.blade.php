@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('vehicles.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="registration">Registration</label>
                <input name="registration" type="text" class="form-control" id="registration">
            </div>
            <div class="form-group col-md-4">
                <label for="type">Type</label>
                <select name="type_id" id="type" class="form-control">
                    <option>Choose type of vehicle...</option>
                    @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="kms">Kms</label>
                <input name="kms" type="number" class="form-control" id="kms">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="brand">Brand</label>
            <input name='brand' type="text" class="form-control" id="brand" placeholder="Brand">
            </div>
            <div class="form-group col-md-6">
            <label for="model">Model</label>
            <input name="model" type="text" class="form-control" id="model" placeholder="Model">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" name="file[]">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" name="file[]" accept="image/*">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" name="file[]">
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
</div>
@endsection
