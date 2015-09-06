<?php

// this little snippet just creates a lookup-table for a ellipse 200*180 with integers starting from 0,0 at the left top corner

$m=array();

for ($i=0;$i<180;$i++)
{
  $rad=deg2rad($i<<1);   
  $m[]=array(100+round(sin($rad)*100),90+round(cos($rad)*90));    
}

$r=json_encode($m);
echo $r;
die();
