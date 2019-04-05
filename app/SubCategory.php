<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //

    protected $guarded=[

    ];

    public function subccategories()
    {
        return $this->hasMany(Subccategory::class);
    }
}
