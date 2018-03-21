<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function complete(){
        return static::where('completed',0)->get();
    }

    // App\Task::incomplete()->get()
    // App\Task::incomplete()->where('id', '>=', 2) 
    public function scopeIncomplete($query){
        return $query -> where('completed',1);
    }
}
