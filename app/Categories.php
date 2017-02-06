<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    public function categories($name) {
        return $this
        ->where('name','=', $name)
        ->leftJoin('posts', 'posts.category_id', '=', 'categories.id')
        ->get();
    }


}