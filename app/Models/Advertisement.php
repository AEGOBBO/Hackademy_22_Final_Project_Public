<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'user_id','is_accepted'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function setAccepted($value){
        $this->is_accepted=$value;
        $this->save();
        return true;
    }
    public static function toBeRevisonedCount(){
        return Advertisement::where('is_accepted', null)->count();
    }
}
