<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    use HasFactory;
    protected $table = 'trademarks';

    protected $with = [];


    protected $fillable = [

        'description',

    ];


    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = strtoupper($value);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }


}
