<?php

// Calculating posts and rails required for user-given length


$requiredLength = 8.9; 

$metre = 'm';

$oneRailonePost = 1.6;

$endPost = 0.1;

$fenceUnitnumber = ($requiredLength - $endPost) / $oneRailonePost;


$railNumber = $fenceUnitnumber; 

$postNumber = ++$fenceUnitnumber; 

echo 'If you want your fence to be ' . $requiredLength .  "$metre, you will need: " . $railNumber . ' rails, and ' . $postNumber . ' posts.'  ; 


// Calculating fence length if you know how many posts and rails you have (beta)




?>


