<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceSubcategory extends Model
{
    public function category() {
        return $this->belongsTo(ServiceCategory::class,'category_id','id');
    }
}
