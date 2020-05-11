<?php
require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;

$JiriKostka1 = 1;
        $JiriKostka2 = 1;
        if($JiriKostka1 <=  $JiriKostka2){
               echo "Jirka Kostka";
        }
        if($JiriKostka1 > $JiriKostka2){
               echo"Jirka";
        }
        else{
            echo"Kostka";
        }
        if ($JiriKostka1 > $JiriKostka2){
            echo"Jirka";
            if($JiriKostka1 == $JiriKostka2){
                echo"Kostka";    
           }
        }
        switch ($JiriKostka1) {
           case 1:
               echo "1";
               break;
           case 2:
               echo"2";
               break;
           case 3:
               echo "3";
               break;
           case 4:
               echo "4";
               break;
           case 5:
               echo "5";
               break;
           case 6:
               echo "6";
               break;
           default:
               echo "Nic neplatí";
        }                              
 $produkty =  array(1 =>"op",2 =>"op1", 3 => "op2",4 =>"op3",5 =>"op4",6 =>"op5",7 =>"op6",8 =>"op7",9 =>"op8",10 =>"op9");                  
 
 $produkty1["op"] = array( );
 $produkty1["up"] = array( );
 $produkty1["ip"] = array( 
    array('Produkt' => 'rohlík bily', 
        'typ' => 'bily', 
        'váha' => '15g', 
        'cena' => '2Kč', 
        'Počet' => 2 ),
    
     array('Produkt' => 'rohlík slaný', 
         'typ' => 'slaný', 
         'váha' => '18g', 
         'cena' => '5Kč', 
         'Počet' => 1 ),
     
    array('Produkt' => 'houska slaná', 
        'typ' => 'slaná', 
        'váha' => '15g', 
        'cena' => '3Kč', 
        'Počet' => 8 ),
     
    array('Produkt' => 'houska normal',
        'typ' => 'normal', 
        'váha' => '50g', 
        'cena' => '4Kč', 
        'Počet' => 6 ),
     
    array('Produkt' => 'maso kureci', 
        'typ' => 'kureci', 
        'váha' => '400g', 
        'cena' => '200Kč', 
        'Počet' => 2 ),
     
    array('Produkt' => 'maso veprovy',
        'typ' => 'veprovy', 
        'váha' => '600g', 
        'cena' => '250Kč', 
        'Počet' => 1 ),
     
    array('Produkt' => 'maso hovezi', 
        'typ' => 'hovezi', 
        'váha' => '800g', 
        'cena' => '180Kč', 
        'Počet' => 3 ),
     
    array('Produkt' => 'koláč sladky', 
        'typ' => 'sladky',
        'váha' => '120g', 
        'cena' => '40Kč', 
        'Počet' => 4 ),
     
    array('Produkt' => 'koláč masovy', 
        'typ' => 'masovy', 
        'váha' => '125g', 
        'cena' => '35Kč', 
        'Počet' => 4 ),
    
     array('Produkt' => 'koláč cokoladovy', 
         'typ' => 'cokoladovy', 
         'váha' => '140g', 
         'cena' => '42Kč', 
         'Počet' => 2 ),
      );
dump($produkty);     
dump($produkty1); 

echo "<br><br>";

$radekJiriKostka=11; 
$sloupecJiriKostka=17; 
    echo "<table border=1>";
    for($i=1;$i<=$radekJiriKostka;$i++) {
    echo "<tr>";
    for($x=1;$x<=$sloupecJiriKostka;$x++){
    echo "<td>".$i."-".$x."</td>";
    }
    echo "</tr>";
    }
    echo "</table><br><br>";

    echo abs(8)."<br>";
    echo cos(240)."<br>";
    $string="My name is Jirka";
    echo strstr($string, "My")."<br>";
    echo strpos($string, "My")."<br>";
    echo sizeof($produkty);
    array_splice($produkty, 0, 1, "Start"); 
    dump($produkty);

    $i=1;
    foreach ($produkty as $produkt){
    echo $i."-".$produkt."<br>";
    $i++;
    }
    echo "<br><br>";
    /**
 * Vrati cenu zbozi
 * @param float $price
 * @return string
 */function currency($price, $currency = "CZK" ,$precision = 1){
    $price = round($price, $precision);
    $price = number_format($price, $precision)." ,-".$currency;
return $price;
}
    echo currency(111.115,'EUR', 1);
    echo "<br>";
    echo currency(41.325);


            