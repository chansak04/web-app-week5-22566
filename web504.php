<?php
$score = 59;
switch($score) {
    case $score >= 80 && $score <=100:
        echo "GRADE A";
        break;
    
    case $score >= 70 && $score <= 79:
        echo "GRADE B";
        break;

    case $score >= 60 && $score <= 69:
        echo "GRADE C";
        break;

    case $score >= 50 && $score <= 59:
        echo "GRADE D";
        break;
    
    case $score <= 49:
        echo "GRADE F";
        break;

    default:
        echo "Error";
        break;
}