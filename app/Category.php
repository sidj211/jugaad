<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $guarded=[];

    public function subcategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function subccategories()
    {
        return $this->hasManyThrough(Subccategory::class,SubCategory::class);
    }
}
