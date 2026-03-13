@extends('layout')
@section('content')

<h3 class="fw-bold">Characters</h3>
<a href="{{ route('characters.create') }}" class="btn btn-outline-dark mb-3">
    ⊕ Create Character
</a>

@foreach ($characters as $character)

<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class = "col">
                <h3>{{ $character->name }}</h3>
                <h5 class="text-secondary">{{ $character->power }}</h5>
                <p>{{ $character->universe }}</p>
            </div>
        
            <div class="col d-flex justify-content-end">
                <div class="dropdown">
                    <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Actions
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('characters.edit', $character->id) }}">Edit</a></li>
                        <li>
                            <form action="{{ route('characters.destroy', $character->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="dropdown-item" type="submit">
                                    Delete
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> 
@endforeach
@endsection