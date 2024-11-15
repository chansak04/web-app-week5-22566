<?php
$score = 55;
if($score >= 80 && $score <= 100){ //80-100 = GRADE A
    echo "GRADE A";
}
elseif($score >= 70 && $score <= 79){ //79-70 = GRADE B
    echo "GRADE B";
}
elseif($score >= 60 && $score <= 69){ //69-60 = GRADE C
    echo "GRADE C";
}
elseif($score >= 50 && $score <= 59){ //59-50 = GRADE D
    echo "GRADE D";
}
elseif($score <= 49){ //<49 = GRADE F
    echo "GRADE F";
}
else{
    echo "Error";
}