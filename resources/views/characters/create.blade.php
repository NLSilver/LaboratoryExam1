@extends('layout')
@section('content')

<h3>Create Character</h3>

<form action="{{ route('characters.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Name">
    </div>

    <div class="mb-3">
        <label>Power</label>
        <input type="text" name="power" class="form-control" placeholder="Power">
    </div>

    <div class="mb-3">
        <label>Universe</label>
        <input type="text" name="universe" class="form-control" placeholder="Universe">
    </div>

<button class="btn btn-outline-dark">⊕ Add Character</button>
<a href="{{ route('characters.index') }}" class="btn btn-outline-danger">Cancel</a>

</form>

@endsection