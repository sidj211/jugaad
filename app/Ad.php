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

    public function categoryname()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
