<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    // 39a. Category has many decks. Foreign key, local key
    public function decks(): HasMany
    {
        return $this->hasMany(Deck::class, 'category_id', 'id');
    }
}
