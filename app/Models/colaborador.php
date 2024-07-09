<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colaborador extends Model
{
    use HasFactory;

    public function pagos(){ 

        return $this->hasMany(pago::class); 

    } 

    public function proyectos(){ 

        return $this->belongsTo(proyecto::class); 

    } 
}
