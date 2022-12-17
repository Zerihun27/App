<?php
$salary = 7000;
$netsalary=0;

function Tax($salary)
{
    if ($salary>=10000) {
        $tax=$salary*0.35;
    }
    elseif ($salary>=7000) {
        $tax=$salary*0.3;
    }
    elseif ($salary>=5000) {
        $tax=$salary*0.25;
    }
    else {
        $tax=$salary*0.15;
    }
    return $tax;
}   

function Retirement($salary)
{
    $reti=$salary*0.07;
    return $reti;
}

$netsalary=$salary-(Tax($salary))-(Retirement($salary));

echo "The net salary is ".$netsalary;