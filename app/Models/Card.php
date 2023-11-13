<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Card extends Model
{
    use HasFactory;

    protected $fillable = ['recto_name', 'verso_name'];


    // 39.b Card belongs to deck. Eventually Foreign key : 'deck_id'
    public function decks(): BelongsTo 
    {
        return $this->belongsTo(Deck::class);
    }
}

