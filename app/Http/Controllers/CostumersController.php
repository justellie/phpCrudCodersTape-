<?php

namespace App\Http\Controllers;

use App\Events\NewCostumerHasRegisteredEvent;
use App\Models\Costumer;
use App\Models\Company;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function PHPUnit\Framework\returnSelf;

class CostumersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $costumers=Costumer::all();
        $companies=Company::all();
        return view('costumers.index',compact('costumers','companies'));
    }
    public function create()
    {
        //paso costumer vacio para que haya algo que mostrar en el formulario
        $companies=Company::all();
        $costumer=new Costumer();
        //dd($costumer);

        return view('costumers.create',compact('companies','costumer'));

    }
    public function store()
    {
        $data=$this->validateRequest();


        $costumer=Costumer::create($data);

        $this->storeImage($costumer);

        event(new NewCostumerHasRegisteredEvent($costumer));
        return redirect('/costumers');
    }
    public function show(Costumer $costumer)
    {
       
        return view('costumers.show',compact('costumer'));
        
    }
    public function edit(Costumer $costumer)
    {
        $companies=Company::all();
        return view('costumers.edit',compact('costumer','companies'));
        
    }
    public function update(Costumer $costumer)
    {
            $costumer->update($this->validateRequest());
            $this->storeImage($costumer);

            return redirect('/costumers/'.$costumer->id);
        
    }

    private function validateRequest()
    {
       return tap(request()->validate([

            'name'=>'required',
            'email'=>'required|email',
            'active'=>'required',
            'company_id'=>'required',

            ]), function () {

            if (request()->hasFile('image')) {
                request()->validate([
                    'image' => 'file|image|max:5000',
                ]);
            }

            });
                
    }  
    public function destroy(Costumer $costumer) 
    {
        $costumer->delete();
        return redirect('/costumers');   
    }
    
    public function storeImage(Costumer $costumer)
    {
        if(request()->has('image'))
        {
            $costumer->update([
                'image'=>request()->file('image')->store('uploads','public'),
            ]);
        }
    }

}
