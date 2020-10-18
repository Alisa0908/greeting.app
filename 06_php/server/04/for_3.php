<?php 
$fruits = ['banana', 'apple', 'melon'];

for($i = 0; $i < 3; $i++){
    echo $fruits[$i] . '<br>';
}

echo '<hr>';

foreach($fruits as $f){
    echo $f . '<br>';
}