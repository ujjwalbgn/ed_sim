<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable=[
        'name',
        'level',
        'dob',
        'allergies',
        'description',
        'barcode'
    ];

    //Patient belongs to Med
    public function med()
    {
        return $this->belongsToMany(Med::class);
    }
}
