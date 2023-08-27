<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public function Customer()
    #Parece ser que dependiendo de la relacion con éste modelo el nombre será singular o plural
    {
        return $this->belongsTo(Customer::class);
        #Hace una relacion donde cada invoice tiene solo un Costumer, lo contrario sería hasMany
    }
}
