<?php

$a=array(
    "mor_menekse,jpg",
    "lale.jpg",
    "gul.jpg",
    "papatya.jpg",
    "orkide.jpg",
    "karanfil.jpg",
    "begonya.jpg"
);
session_start();
$used=&$_SESSION['usedIndexes'];
if(count($used)>  count($a))
    $used=array();
foreach($used as $index)
{unset($a[$index]);}
$random=  array_rand($a);
$used[]=$random;
echo '<p>'.  trim($a[$random]).'</p>';

?>/

