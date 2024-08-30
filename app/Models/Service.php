<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";

    public function category() {
        return $this->belongsTo(ServiceCategory::class,'category_id','id');
    }

    public function subcategory() {
        return $this->belongsTo(ServiceCategory::class,'subcategory_id','id');
    }
}
