@extends('layouts.app')
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

            <div class="form-group">
                <label for="active">Status</label>
                <select name="active" id="active" class="form-control">
                    <option value="" disabled>Select customer status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <div class="form-group">
                <label for="company_id">Company</label>
                <select name="company_id" id="company_id" class="form-control">
                    @foreach ($companies as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add Costumer</button>
            @csrf
        </form>
    </div>
</div>
<hr>
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
    <div class="row">
        <col-12>
        
        @foreach ($companies as $company)
        <h3>{{$company->name}}</h3>

            @foreach($company->costumers as $costumer)
            <li>{{$costumer->name}} <span class="text-muted">{{$costumer->email}}</span></li>
            @endforeach
        @endforeach
        </col-12>
    </div>
</div>

@endsection