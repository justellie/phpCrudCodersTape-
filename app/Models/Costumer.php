<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    
    use HasFactory;
    //Ejemplo fillable digo cuales acepto 
    //protected $fillable=['name','email','active'];
    
    //digo cuales me reservo, en este casi ninguno
    protected $guarded=[];
    
    public function scopeActive($query)
    {
        return $query->where('active',1);
    }
    
    public function scopeInactive($query)
    {
        return $query->where('active',0);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
