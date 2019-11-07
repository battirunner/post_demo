<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function searchkey()
    {
        return $this->hasMany('App\SearchKey', 'post_id', 'id'  );
    }
}
