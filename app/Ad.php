<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    //

    protected $guarded=[

    ];

    public function photo()
    {
        return $this->hasMany(Photo::class);
    }
}
