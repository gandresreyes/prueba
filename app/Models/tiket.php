<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{

    protected $guarded = ['id'];
    use HasFactory;
    const activo = 1;
    const preceso = 2;
    const finalizado = 3;

    //relacion uno a muchos inversa
    public function historia(){
        return $this->belongsTo('App\model\historia');

    }
}
