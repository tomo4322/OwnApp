<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class item extends Model
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

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
