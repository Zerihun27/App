<?php
$x=3;
$y=2;
$operation=["sum","pro","diff","div"];

$op = array_search('sum',array_values($operation));

echo $op."<br>";
foreach($operation  as $op){

    echo $op."<br>";
    /*
switch ($op) {
    case "sum":
        $sum=$x+$y;
        echo $x." + ".$y." = ".$sum;
        break;
    case "pro":
        $pro=$x*$y;
        echo $x." and ".$y." is ".$pro;
        break;
    case "diff":
        $diff=$x-$y;
        echo "The Diff of ".$x." and ".$y." is ".$diff;
        break;
        case "div":
            $div=$x/$y;
            echo "The Div of ".$x." and ".$y." is ".$div;
            break;        
    default:
echo"error ";
        break;
}
*/
}