@extends('layouts.app')
@section('title')
    Add new costumer
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Add Costumer</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form action="/costumers" method="POST" enctype="multipart/form-data" class="pb-5" >
                @include('costumers.form')
            <button type="submit" class="btn btn-primary">Add Costumer</button>
        </form>
    </div>
</div>


@endsection