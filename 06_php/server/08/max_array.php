<?php 
$nums = range(1, 100);


function maxArray($array)
{
    $max_value = $array[0];
    foreach ($array as $value){
        if ($max_value < $value){
            // $arrayのものを$valueで取り出して比べる
    
            $max_value = $value;
        }
    }
    return $max_value;
    }
echo maxArray($nums);

