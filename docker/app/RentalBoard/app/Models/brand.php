<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Brand extends Model
{
    protected $fillable = [
        'name'
    ];

    use HasFactory;
    public function items()
    {
        return $this->belongsTo(Item::class);
        // return $this->hasMany(Item::class);
    }
}
