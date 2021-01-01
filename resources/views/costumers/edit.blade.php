@extends('layout')
@section('title','Edit Details for'.$costumer->name)
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Edit Details for {{$costumer->name}}</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form action="/costumers/{{$costumer->id}}" method="POST" class="pb-5">
                @method('PATCH')
                @include('costumers.form')
            <button type="submit" class="btn btn-primary">Save Costumer</button>
        </form>
    </div>
</div>


@endsection