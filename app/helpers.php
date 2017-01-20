<?php

function pol_month($posts)
{
    $month = $posts['created_at'];
    $month_sub = substr($month,5,2);

    $months_arr = array('01' => 'STY', '02' => 'LUTY', '03' => 'MAR',
        '04' => 'KWI', '05' => 'MAJ', '06' => 'CZE',
        '07' => 'LIP', '08' => 'SIE', '09' => 'WRZE',
        '10' => 'PAŹ', '11' => 'LIS', '12' => 'GRU');

    $pol_month = $months_arr[$month_sub];

    return $pol_month;
}

function pol_day($posts)
{
    $month = $posts['created_at'];
    $new_day = substr($month,8,2);
    return $new_day;
}

function year($posts)
{
    return $year = substr($posts['created_at'],0,4);
}

function post_truncate($posts)
{
    $data = $posts['excerpt'];
    if (strlen($data) > 200) {
        return $truncated = substr($data, 0, strrpos(substr($data, 0, 200), ' '));
    }
}
function category_name($posts, $categories)
{

    $entry_category = $posts['category_id'];

    foreach ($categories as $key => $val) {
        if ($val['id'] === $entry_category) {
            return $val['name'];
        }
    }
}

function iframe_search($posts)
{
    $data  = ($posts[0]['body']);
    preg_match('#(?:<iframe[^>]*)(?:(?:/>)|(?:>.*?</iframe>))#i', $data, $matches);

//    var_dump($matches);
    $movie = $matches[0];
    return $movie;
}