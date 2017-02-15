<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Movie extends Model
{
    public function archive()
    {
        return $this
            ->select(DB::raw('count(id) as `data`'))
            ->select(DB::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"))
            ->select(DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();
    }
}