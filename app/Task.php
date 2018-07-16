<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //We can enter query scopes into our model

    /* public static function incomplete()
    {
        //taken a basic query and wrapped it within a method.
        return static::where('completed', 0)->get();
    }
    */
    /*

    scopeIncomplete //this will allow us to do Task::incomplete();
    as we prefixed it with a scope at the start, Laravel knows this as a query scope,
    and it will accept the existing query as a parameter.

    The query scope is a particular wrapper around the query.

    */
    public function scopeIncomplete($query) 
    {
        return $query->where('completed', 0);
    }
}
