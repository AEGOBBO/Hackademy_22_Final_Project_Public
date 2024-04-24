<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'descriprion', 'price'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
