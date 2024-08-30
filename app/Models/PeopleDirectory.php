<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeopleDirectory extends Model
{
    protected $table = "people_directories";

    public function department() {
        return $this->belongsTo(Department::class,'department_id','id');
    }
}
