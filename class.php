<?php
class Salary
{
  public  $income=7000;
  public  $tax;
  public $pen;
  public $gross_salary;
  public $net_salary;
  public $total_dedaction;
  public $house_allowance;

  function Tax($income){
    if ($income>=10000) {
        $tax=$income*0.35;
    }
    elseif ($income>=7000) {
        $tax=$income*0.3;
    }             
    elseif ($income>=5000) {
        $tax=$income*0.25;
    }
    else {
        $tax=$income*0.15;
    }
    return $tax;
  }
  
  function Pen ($income){
    $pen=$income*0.07;
    return $pen;
}

  function Total_dedaction($tax , $pen){
    $total_dedaction= $tax + $pen;
    return $total_dedaction;
  }

  function Net_salary($income ,$total_dedaction){
    $net_salary = $income - $total_dedaction;
    return $net_salary;
  }
}


$inc = new Salary();
$t = $inc->tax(7000);
echo "Tax = ".$t."<br>";

$p = $inc->pen(7000);
echo "Pension = ".$p."<br>";

$td = $inc->total_dedaction($t , $p);
echo "Total_dedaction = ".$td."<br>";

$nets = $inc->net_salary(7000 ,$td);
echo " Net_salary = ".$nets."<br>";


  ?>

