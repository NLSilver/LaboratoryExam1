@extends('layout')
@section('content')

<h3>Edit Character</h3>

<form action="{{ route('characters.update',$character->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ $character->name }}" placeholder="Name">
    </div>

    <div class="mb-3">
        <label>Power</label>
        <input type="text" name="power" class="form-control" value="{{ $character->power }}" placeholder="Power">
    </div>

    <div class="mb-3">
        <label>Universe</label>
        <input type="text" name="universe" class="form-control" value="{{ $character->universe }}" placeholder="Universe">
    </div>

    <button class="btn btn-outline-dark">Save Changes</button>
    <a href="{{ route('characters.index') }}" class="btn btn-outline-danger">Cancel</a>
</form>

@endsection