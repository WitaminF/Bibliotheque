<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'prenom', 'email', 'adresse', 'npa', 'ville', 'date_naissance', 'genre', 'telephone'
    ];
}
