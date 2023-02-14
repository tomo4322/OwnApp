<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;

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

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
