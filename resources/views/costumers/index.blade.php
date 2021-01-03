@extends('layouts.app')
@section('title')
    Costumer list
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Costumers</h1>
        <p><a href="/costumers/create">Add new costumer</a></p>
    </div>
</div>
@foreach($costumers as $costumer)

<div class="row">
    <div class="col-2">
        {{$costumer->id}}
    </div>
    <div class="col-4">
        <a href="/costumers/{{$costumer->id}}">{{$costumer->name}}</a>    
    </div>

    <div class="col-4">
        {{$costumer->company->name}}
    </div>
    <div class="col-2">{{$costumer->active}}</div>
</div>
@endforeach

@endsection