<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;
use App\Models\Item;

class prefecture extends Model
{
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',

    ];


    use HasFactory;

    public function regions()
    {
        return $this->belongsTo(Region::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
