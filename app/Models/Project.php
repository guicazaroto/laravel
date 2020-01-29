<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function user () {
        return $this->belongsTo(User::class); // select * from user where project_id =  (current instance)
    }
}
