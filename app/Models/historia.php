<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historia extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    
    //relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo('App\model\User');

    }

     //relacion uno a muchos
     public function tikets(){
        return $this->hasMany('App\Models\tiket');
    }    

}   
    