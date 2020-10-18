<?php 

$members = ['Bob', 'Tom', 'Ken', 'John'];

$members[1] = 'Michael';
// Tomをマイケルに変更


$members[50] = 'SKIP';

$members[] = 'Daniel';

print_r($members);

