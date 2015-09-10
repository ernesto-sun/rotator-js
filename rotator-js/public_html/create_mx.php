<?php

// this little snippet just creates a lookup-table for a ellipse 200*180 with integers starting from 0,0 at the left top corner

$m=array();

$step=90/400;

for ($i=0;$i<=400;$i++)
{
  $rad=deg2rad($step*$i);   
  $m[]=round(cos($rad)*50,3);    
}

$r=json_encode($m);
echo $r;
die();
