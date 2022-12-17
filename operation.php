<?php
$x=2;
$y=3;
$sum=$x+$y;
$diff=$x-$y;
$pro=$x*$y;
$div=$x/$y;
echo "X = ".$x."<br>";
echo "Y = ".$y."<br>";
echo "The Sum of ".$x." and ".$y." is ".$sum."<br>";
echo "The Diff of ".$x." and ".$y." is ".$diff."<br>";
echo "The Pro of ".$x." and ".$y." is ".$pro."<br>";
if($y==0){
echo"Division by 0 is error";
}
else
{
echo "The Div of ".$x." and ".$y." is ".$div."<br><br>";
}

function module($x){
if($x%2==0)
return "X is EVEN";

else 
return "X is ODD";
}

echo module($x)."<br><br>";



if($x>$y)
echo "X is greater than Y"."<br><br>";
else
echo "Y is greater than X"."<br><br>";



for ($i=0; $i <=10 ; $i++) { 
    if($i%2==0)
    echo $i." is EVEN"."<br>";
    
    else 
    echo $i." is ODD"."<br>";
}


?>