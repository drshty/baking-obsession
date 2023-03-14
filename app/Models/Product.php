<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','image_url','description','isAvailable'];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
