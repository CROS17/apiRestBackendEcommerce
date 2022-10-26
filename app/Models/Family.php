<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $table = 'families';

    protected $with = [];


    protected $fillable = [
        'description',
    ];


    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = strtoupper($value);
    }


    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
