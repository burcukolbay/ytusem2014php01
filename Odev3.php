<?php

echo $sifre="basit sifre: " . basit_sifre_uret();
echo "<br>";
echo $sifre2="guclu sifre: " . guclu_sifre_uret();
function basit_sifre_uret($uzunluk=10)
{
    $sifre="";
    $karakter1="aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ";
    if($uzunluk<4)
    {
        echo "Sifre uzunlugu 3 karakterden fazla olmali";
    }
    else{
    for( $i=1;$i<$uzunluk+1;$i++)
    {
       $sifre.=$karakter1{rand()%52};
       
    }
    return $sifre;
}}
function guclu_sifre_uret($uzunluk=10)
{
    
    $sifre2="";
    $karakter2="aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ+-/?*!0123456789";
    if($uzunluk<4)
    {
        echo "Sifre uzunlugu 3 karakterden fazla olmali";
    }
    else{
    for($j=1;$j<$uzunluk+1;$j++)
    {
        $sifre2.=$karakter2{rand()%68};
        
    }
    return $sifre2;
    }
}
