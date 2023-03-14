<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class Province extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function cities():BelongsToMany
    {
        return $this->belongsToMany(City::class);
    }
}
