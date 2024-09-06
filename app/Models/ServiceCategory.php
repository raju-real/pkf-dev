<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceCategory extends Model
{
    use SoftDeletes;

    public function subcategories() {
        return $this->hasMany(ServiceSubcategory::class,'category_id','id');
    }
}
