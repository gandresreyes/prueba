<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //relacion uno a muchos

    public function usuarios(){
        return $this->hasMany('App\Models\User');
    }
}

