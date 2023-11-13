<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Deck extends Model
{
    use HasFactory;

    protected $fillable = ['name'];


    // 39a. Deck has many cards. Eventually Foreign key, local key : Card::class, 'deck_id', 'id'
    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }

    
    // 39.b Deck belongs to user and to categories. Eventually Foreign key : 'user_id'
    public function users(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }


    public function categories(): BelongsTo 
    {
        return $this->belongsTo(Catefory::class);
    }
    


}