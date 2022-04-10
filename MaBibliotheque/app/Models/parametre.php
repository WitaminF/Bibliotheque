<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parametre extends Model
{
    use HasFactory;
    protected $fillable = [
        'nb_jour_emprunt_max',
        'nb_emprunt_max'
    ];
}
