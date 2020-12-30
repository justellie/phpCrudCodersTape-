@extends('layout')
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
<div class="row">
    <div class="col-6">
        <h3>Active Customers</h3>
        <ul>
            @foreach($activeCostumers as $activecostumer)
            <li>{{$activecostumer->name}} <span class="text-muted">({{$activecostumer->company->name}})</span></li>
            @endforeach

        </ul>
    </div>
    <div class="col-6">
        <ul>
        <h3>Inactive Customers</h3>

            @foreach($inactiveCostumers as $inactivecostumer)
            <li>{{$inactivecostumer->name}} <span class="text-muted">({{$inactivecostumer->company->name}}) </span></li>
            @endforeach

        </ul>
    </div>
 
</div>

@endsection