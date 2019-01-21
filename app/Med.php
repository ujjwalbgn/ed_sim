<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Med extends Model
{
    protected $fillable=[
        'name',
        'type',
        'description',
        'barcode',
        'dateTimeRNVerified',
        'timeYesterday',
        'timeToday',
        'timeTomorrow',
    ];

    //Med belongs to Patient
    public function patient()
    {
        return $this->belongsToMany(Patient::class);
    }
}


