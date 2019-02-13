<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    protected $fillable=[
        'initials',
        'printName',
        'signature',
    ];

    public function patient()
    {
        return $this->belongsToMany(Patient::class);
    }
}
