<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use App\Models\Company;

use Illuminate\Http\Request;

class CostumersController extends Controller
{
    public function index()
    {
        $activeCostumers=Costumer::active()->get();
        $inactiveCostumers=Costumer::inactive()->get();
        $companies=Company::all();
        return view('costumers.index',compact('activeCostumers','inactiveCostumers','companies'));
    }
    public function create()
    {
        /*$data=request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'active'=>'required',
            'company_id'=>'required']);
        $costumer=Costumer::create($data);
        */
        $companies=Company::all();

        return view('costumers.create',compact('companies'));

    }
    public function store()
    {
        $data=request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'active'=>'required',
            'company_id'=>'required']);
        Costumer::create($data);
        
        return redirect('/costumers');
    }
}
