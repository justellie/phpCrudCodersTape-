@extends('layouts.app')
@section('title')
Costumer list
@endsection
@section('content')

@can('create',App\Models\Costumer::class)
<div class="row">
    <div class="col-12">
        <h1>Costumers</h1>
        <p><a href="/costumers/create">Add new costumer</a></p>
    </div>
</div>
@endcan
@foreach($costumers as $costumer)

<div class="row">
    <div class="col-2">
        {{$costumer->id}}
    </div>
    <div class="col-4">
    @can('view',$costumer)
        <a href="/costumers/{{$costumer->id}}">
            {{$costumer->name}}
        </a>
    @endcan

    @cannot('view',$costumer)
        {{$costumer->name}}
    @endcannot
    </div>

    <div class="col-4">
        {{$costumer->company->name}}
    </div>
    <div class="col-2">{{$costumer->active}}</div>
</div>
@endforeach
<div class="d-flex justify-content-center">
    {{$costumers->links()}}
</div>


@endsection