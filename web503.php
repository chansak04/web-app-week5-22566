<?php
$age = 23;
$national = "India";

if($national == "India"){
    if($age >= 18){
        echo "Eligible to give vote";
    }else{
        echo "Not eligible to give vote";
    }
}else{
    echo "Not India";
}