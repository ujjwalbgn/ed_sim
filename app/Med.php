<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Med extends Model
{
    protected $fillable=[
        'name',
        'time',
        'description',
        'barcode'
    ];

    //Med belongs to Patient
    public function patient()
    {
        return $this->belongsToMany(Patient::class);
    }


}


