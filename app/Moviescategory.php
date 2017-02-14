<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Moviescategory extends Model
{
    public function categories($name) {
        return $this
            ->where('name','=', $name)
            ->leftJoin('movies', 'movies.category_id', '=', 'moviescategories.id')
            ->get();
    }
}
