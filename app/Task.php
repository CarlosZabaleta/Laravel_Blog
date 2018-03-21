<?php

namespace App;
// Eloquent simplifies interaction
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    function iscompleted()
    {
        return false;
    }
}
