@extends('layout')
@section('title','Details for '.$costumer->name)
    
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Details for {{$costumer->name}}</h1>
        <p><a href="/costumers/{{$costumer->id}}/edit">Edit</a></p>
        <form action="/costumers/{{$costumer->id}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-12">
    <p><strong>Name </strong>{{$costumer->name}}</p>
    <p><strong>Email </strong>{{$costumer->email}}</p>
    <p><strong>Company </strong>{{$costumer->company->name}}</p>

    </div>
</div>


@endsection