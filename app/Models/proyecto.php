<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    public function clientes(){ 

        return $this->belongsTo(Cliente::class); 

    } 

    public function colaboradors(){ 

        return $this->belongsTo(colaborador::class); 

    } 
}
