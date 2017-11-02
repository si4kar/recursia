<?php


$arr = ['a' => ['one', 'two', 'three'],
        'b' => ['four', 'five', 'six'],
        'c' => ['seven', 'eight', 'nine',
            'ten' => [1,2,3]]];


function count_el($array)
{
    $count =0;
    foreach($array as $k => $v){
        if (is_array($v)) {
            $count += count_el($v);

        }
        $count += count($k);
    }
    return $count;
}

echo count_el($arr);