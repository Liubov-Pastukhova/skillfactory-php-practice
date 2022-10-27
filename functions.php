<?php

function getAge($bYear){
    $age = (idate('Y') - $bYear);
    if (($age > 10 && $age < 20) || $age%10 == 0 || ($age%10 >= 5  && $age%10 <= 9)) {
        return $age . ' лет';
    } elseif ($age%10 == 1) {
        return $age . ' год';
    } else {
        return $age . ' года';
    }
}
?>