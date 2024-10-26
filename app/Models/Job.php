<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use SoftDeletes;

    public function department() {
        return $this->belongsTo(JobDepartment::class,'department_id','id');
    }
}
