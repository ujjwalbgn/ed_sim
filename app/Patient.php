<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable=[
        'name',
        'level',
        'diagnosis',
        'provider',
        'age',
        'dob',
        'gender',
        'height',
        'weight',
        'allergies',
        'sensitivity',
        'description',
        'barcode',
    ];

    //Patient belongs to Med
    public function med()
    {
        return $this->belongsToMany(Med::class);
    }
}
