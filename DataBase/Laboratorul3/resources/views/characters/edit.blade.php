@extends('characters.layout') 

@section('title', 'Edit Character') 
   
@section('content')
    <a class="btn btn-primary mb-3" href="{{ route('characters.index') }}"> Back</a> 

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('characters.update',$character->id) }}" method="POST"> 
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $character->name }}" class="form-control" placeholder="Name"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $character->detail }}</textarea> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
