 <?php
        $a=5;
        $b=10;
        $c=7;
        $d=1;        
        
        
       echo '<h2> Pirmas budas<br></h2>';
        if(($a>$b)&&($a>$c)&&($a>$d)){
            echo "Didziausias skaicius yra $a";
        } else if (($b>$a)&&($b>$c)&&($b>$d)){
            echo "Didziausias skaicius yra $b";
                       
        }elseif (($c>$a)&&($c>$b)&&($c>$d)) {
             echo "Didziausias skaicius yra $c";
            
        } else {echo "Didziausias skaicius yra $d<br>";
            
        }
        echo '<br>';
        echo '<br>';
        echo '<h2> Antras budas<br></h2>';
        
       $array = [4,5,6,7,8,2,9,1, 10]; 
       echo "Mažiausias skaicius yra ";
       echo(min($a,$b,$c,$d) . "<br>"); 
      echo "Didziausias skaicius yra ";
       echo(max($a,$b,$c,$d) . "<br>");

        
        echo '<br>';
        echo '<br>';
        echo '<h2> Trecias budas<br></h2>';
        
$min = $array[0];
$max = $array[0];
$n = count($array);

for($i=1;$i<$n;$i++) {
if($min>$array[$i]):
    $min = $array[$i];
endif;
}
echo "Didziausias skaicius yra $min<br>";

for($i=1;$i<$n;$i++) {
if($max>$array[$i]) {
    $max = $max;        
} else {
    $max = $array[$i];
}
}
echo "Didziausias skaicius yra $max<br>";
        
        
        ?>
        