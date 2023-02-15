<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;
use App\Models\Prefecture;
use App\Models\Brand;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     *
     */

    protected $fillable = [
        'trade_place',
        'trade_day',
        'item_name',
        'length',
        'float',
        'select',
        'price'
    ];

    use HasFactory;

    public function user()
    {
        // return $this->hasMany(User::class);
        return $this->belongsTo(User::class);
    }

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }


}
