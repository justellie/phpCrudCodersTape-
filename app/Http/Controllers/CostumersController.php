<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;

class CostumersController extends Controller
{
    public function list()
    {
        $costumers=Costumer::all();
        return view('internals.costumers',
                ['costumers'=>$costumers]);
    }
    public function store()
    {
        $data=request()->validate([
            'name'=>'required',
            'email'=>'required|email']);
        $costumer= new Costumer();
        $costumer->name=request('name');
        $costumer->email=request('email');
        $costumer->save();
        return back();
    }
}
