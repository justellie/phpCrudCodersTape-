@extends('layouts.app')
@section('title','Contact Us')

@section('content')
<h1>Contact Us</h1>
<label for="name">Name</label>
<form action="{{route('contact.store')}}"  method="POST">
    <div class="form-group ">
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        <div>{{$errors->first('name')}}</div>
    </div>
    <label for="email">Email</label>
    <div class="form-group">
        <input type="text" name="email" value="{{old('email') }}" class="form-control">
        <div>{{$errors->first('email')}}</div>

    </div>
    <label for="message">Message</label>
    <div class="form-group">
        <textarea name="message" id="message" cols="30" rows="10" class="form-control" value="{{old('message')}}"></textarea>
        <div>{{$errors->first('message')}}</div>
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
@endsection