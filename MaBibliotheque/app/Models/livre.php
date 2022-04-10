<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class livre extends Model
{
    protected $fillable = [
        'categorie_id',
        'editeur_id',
        'auteur_id',
        'isbn',
        'nom',
        'langue'
    ];

    /**
     * Get the auther that owns the book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function auteur(): BelongsTo
    {
        return $this->belongsTo(auteur::class,'auteur_id','id');
    }

    /**
     * Get the category that owns the book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categorie(): BelongsTo
    {
        return $this->belongsTo(categorie::class, 'categorie_id', 'id');
    }

    /**
     * Get the publisher that owns the book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function editeur(): BelongsTo
    {
        return $this->belongsTo(editeur::class, 'editeur_id', 'id');
    }



}
