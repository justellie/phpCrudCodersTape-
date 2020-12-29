@extends('layout')
@section('title')
    Costumer list
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Costumers</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form action="costumers" method="POST" class="pb-5">

            <label for="name">Name</label>
            <div class="form-group ">
                <input type="text" name="name" value="{{old('name')}}" class="form-control">
                <div>{{$errors->first('name')}}</div>
            </div>
            <label for="email">Email</label>
            <div class="form-group">
                <input type="text" name="email" value="{{old('email')}}" class="form-control">
                <div>{{$errors->first('email')}}</div>

            </div>
            <button type="submit" class="btn btn-primary">Add Costumer</button>
            @csrf
        </form>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12">
        <ul>
            @foreach($costumers as $costumer)
            <li>{{$costumer->name}} <span class="text-muted">{{$costumer->email}}</span></li>
            @endforeach

        </ul>
    </div>
</div>

@endsection