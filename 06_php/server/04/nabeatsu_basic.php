<?php 
for($i = 1;$i <= 100;$i++){
    if($i % 3 == 0 || strstr($i, '3')){
        #リアルナベアツ
        echo 'アホ ';
    }else{
        echo "$i ";
    }
}