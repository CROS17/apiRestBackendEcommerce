<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $with = ['families'];


    protected $fillable = [

        'family_id',
        'description',
    ];


    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = strtoupper($value);
    }


    public function families()
    {
        return $this->belongsTo(Family::class,'family_id');
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

}
