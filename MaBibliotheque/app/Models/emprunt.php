<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class emprunt extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the client that owns the book_issue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(client::class, 'client_id', 'id');
    }

    /**
     * Get the book that owns the book_issue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function livre(): BelongsTo
    {
        return $this->belongsTo(livre::class, 'livre_id', 'id');
    }


    protected $casts = [
        'date_emprunt' => 'datetime:Y-m-d',
        'date_retour' => 'datetime:Y-m-d',
        'jour_retour' => 'datetime:Y-m-d',
    ];
}
