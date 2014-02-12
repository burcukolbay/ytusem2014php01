ikinci ödev
<?php



 $meyveler=  array(
    1=>array ('meyve_ad'=>'Elma','fiyat'=>2.00,'adet'=>26),
    2=>array ('meyve_ad'=>'Portakal','fiyat'=>2.50,'adet'=>20),
    3=>array ('meyve_ad'=>'Cilek','fiyat'=>3.00,'adet'=>16),
    4=>array ('meyve_ad'=>'Muz','fiyat'=>4.00,'adet'=>22),
    5=>array ('meyve_ad'=>'Kivi','fiyat'=>1.00,'adet'=>8),
    6=>array ('meyve_ad'=>'Mandalina','fiyat'=>1.50,'adet'=>15),
    7=>array ('meyve_ad'=>'Kiraz','fiyat'=>5.00,'adet'=>17),
    8=>array ('meyve_ad'=>'Avakado','fiyat'=>5.50,'adet'=>12),
    9=>array ('meyve_ad'=>'Mango','fiyat'=>6.00,'adet'=>10),
    10=>array ('meyve_ad'=>'Karpuz','fiyat'=>6.50,'adet'=>9)
    );

$first_parameter= rand(1, 20);
$second_parameter=rand(1,100);
stock_control($first_parameter,$second_parameter);

function stock_control($a,$b)
{
    global $meyveler;
    if(is_numeric($a)&&  is_numeric($b))
    {echo 'Parametreler sayisal <br>';}
    
    else {echo 'Hata oluştu. Parametreler sayisal değil <br>';}
    if($a>10){echo 'Bu numara meyve stokta yok';}
    
    if($a<11&&$b>$meyveler[$a-1]['adet'])
    {echo "Stokta yeterli meyve yok. <br> Stoktaki adet {$meyveler[$a-1]['adet']} ";}
    if($a>0&&$a<11&&$b<$meyveler[$a-1]['adet'])
    {echo "Meyve adi: {$meyveler[$a-1]['meyve_ad']} "." Stok adeti: {$meyveler[$a-1]['adet']}";
        echo ' Toplam tutar'; echo  $b*$meyveler[$a-1]['fiyat'];}
    }


