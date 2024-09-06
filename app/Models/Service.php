<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    
    protected $table = "services";

    public function category() {
        return $this->belongsTo(ServiceCategory::class,'category_id','id');
    }

    public function subcategory() {
        return $this->belongsTo(ServiceSubcategory::class,'subcategory_id','id');
    }
}
