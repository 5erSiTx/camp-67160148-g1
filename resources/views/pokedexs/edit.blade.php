@extends('template.default')

@section('content')
<div class="container-custom">
    <div class="row mb-4">
        <div class="col-md-12">
            <h1>Edit Pokedex</h1>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pokedexs.update', $pokedex->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name">Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $pokedex->name }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="type">Type <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $pokedex->type }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="species">Species <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="species" name="species" value="{{ $pokedex->species }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="height">Height</label>
            <input type="number" class="form-control" id="height" name="height"  value="{{ $pokedex->height }}">
        </div>

        <div class="form-group mb-3">
            <label for="weight">Weight</label>
            <input type="number" class="form-control" id="weight" name="weight" step="0.01" value="{{ $pokedex->weight }}">
        </div>

        <div class="form-group mb-3">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name="hp" value="{{ $pokedex->hp }}">
        </div>

        <div class="form-group mb-3">
            <label for="attack">Attack</label>
            <input type="number" class="form-control" id="attack" name="attack" value="{{ $pokedex->attack }}">
        </div>

        <div class="form-group mb-3">
            <label for="defense">Defense</label>
            <input type="number" class="form-control" id="defense" name="defense" value="{{ $pokedex->defense }}">
        </div>

        <div class="form-group mb-3">
            <label for="image_url">Image URL</label>
            <input type="text" class="form-control" id="image_url" name="image_url" value="{{ $pokedex->image_url }}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('pokedexs.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
