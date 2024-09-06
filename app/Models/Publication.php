<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publication extends Model
{
    use SoftDeletes;

    public function category() {
        return $this->belongsTo(PublicationCategory::class,'category_id','id');
    }
}
