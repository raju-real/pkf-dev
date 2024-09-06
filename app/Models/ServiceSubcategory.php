<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceSubcategory extends Model
{
    use SoftDeletes;
    
    public function category() {
        return $this->belongsTo(ServiceCategory::class,'category_id','id');
    }
}
