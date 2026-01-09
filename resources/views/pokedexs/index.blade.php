@extends('template.default')

@section('content')
<div class="container-custom">
    <div class="row mb-4">
        <div class="col-md-12">
            <h1>Pokedex List</h1>
            <a href="{{ route('pokedexs.create') }}" class="btn btn-primary">Add New Pokedex</a>
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Species</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>HP</th>
                    <th>Attack</th>
                    <th>Defense</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pokedexs as $pokedex)
                    <tr>
                        <td>{{ $pokedex->id }}</td>
                        <td>{{ $pokedex->name }}</td>
                        <td>{{ $pokedex->type }}</td>
                        <td>{{ $pokedex->species }}</td>
                        <td>{{ $pokedex->height }}</td>
                        <td>{{ $pokedex->weight }}</td>
                        <td>{{ $pokedex->hp }}</td>
                        <td>{{ $pokedex->attack }}</td>
                        <td>{{ $pokedex->defense }}</td>
                        <td>
                            @if($pokedex->image_url)
                                <img src="{{ $pokedex->image_url }}" alt="{{ $pokedex->name }}" style="width: 50px; height: 50px;">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            <--<a href="{{ route('pokedexs.show', $pokedex->id) }}" class="btn btn-info btn-sm">View</a>-->
                            <a href="{{ route('pokedexs.edit', $pokedex->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pokedexs.destroy', $pokedex->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="11" class="text-center">No pokedex data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
