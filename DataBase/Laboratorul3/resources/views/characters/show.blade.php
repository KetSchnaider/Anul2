@extends('characters.layout') 

@section('title', 'Detail Character') 
  
@section('content')
    <a class="btn btn-primary mb-3" href="{{ route('characters.index') }}"> Back</a> 

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $character->name }} 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong><br>
                {{ $character->detail }} 
            </div>
        </div>
    </div>
@endsection
