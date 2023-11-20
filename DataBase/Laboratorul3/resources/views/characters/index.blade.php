@extends('characters.layout') 

@section('title', 'List of Characters') 
 
@section('content')
    <a class="btn btn-success mb-3" href="{{ route('characters.create') }}"> Create New Character</a> 

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
        @foreach ($characters as $character) 
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $character->name }}</td> 
            <td>{{ $character->detail }}</td> 
            <td>
                <form action="{{ route('characters.destroy', $character->id) }}" method="POST"> 
                    <a class="btn btn-info mb-1" href="{{ route('characters.show', $character->id) }}">Show</a> 
                    <a class="btn btn-primary mb-1" href="{{ route('characters.edit', $character->id) }}">Edit</a> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $characters->links() !!} 
@endsection
