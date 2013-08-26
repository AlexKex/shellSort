<?php

function ShellSort(&$a)
{
	$sort_length = count($a) - 1;
	$step = ceil(($sort_length + 1)/2);
	// переделать на массив чисел!

	do
	{
	   $i = ceil($step);
	   do
	   {
	     $j=$i-$step;
	     $c=1;
	     do
	     {
	       if($a[$j]<=$a[$j+$step])
	       {
		  	$c=0;
	       }
	       else
		   {
		      $tmp=$a[$j];
		      $a[$j]=$a[$j+$step];
		      $a[$j+$step]=$tmp;
		   }
		$j=$j-1;
	     }
	     while($j>=0 && ($c==1));
	      $i = $i+1;
	    }
	    while($i<=$sort_length);
	    $step = $step/2;
	}
	while($step>0);
}

$arr = range(0, 1000);
shuffle($arr);

echo "<pre>";
print_r($arr);
echo "</pre>";

ShellSort($arr, 51);

echo "<pre>";
print_r($arr);
echo "</pre>";

?>