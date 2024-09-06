<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PeopleDirectory extends Model
{
    use SoftDeletes;
    
    protected $table = "people_directories";

    public function department() {
        return $this->belongsTo(Department::class,'department_id','id');
    }
}
