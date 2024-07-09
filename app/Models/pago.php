<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pago extends Model
{
    use HasFactory;

    public function colaboradors(){ 

        return $this->belongsTo(colaborador::class); 

    } 

    public function tipo_pagos(){ 

        return $this->belongsTo(tipo_pago::class); 

    } 
}
