<?php
if ($_SERVER['QUERY_STRING'] !=""){
    $url=$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
}else{
    $url=$_SERVER['PHP_SELF'];
}
//echo $_SERVER['PHP_SELF'];
$add=$_SERVER['DOCUMENT_ROOT']."/PhpProject1/apsilankymai/urlfile.txt";
$adds=$_SERVER['DOCUMENT_ROOT']."/PhpProject1/apsilankymai/counter.txt";
$li=file($add);
$a=count($li);
$i=0;
$w=-1;
while ($i<=$a):
    $tmp =@ trim(str_replace("\n", "", $li[$i]));
if ($tmp==$url){
    $w=$i;
    $i=$a++;
}
$i++;
endwhile;
if ($w==-1){
    $fp= fopen($add, "a+");
    if ($fp){
        $fw= fwrite($fp, $url."\n");
        fclose($fp);
    }
    $fp= fopen($adds, "a+");
    if ($fp){
        $fw= fwrite($fp, "0"."\n");
        fclose($fp);
    }
    $w=$a++;
}
$co=file($adds);
$co[$w]=trim(str_replace("\n", "", $co[$w]));
$co[$w]++;
$count=$co[$w];
$co[$w]=$co[$w]."\n";
$p= implode("", $co);
$fp=fopen($adds,"w");
if ($fp){
    $fw= fwrite($fp, $p);
    fclose($fp);
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */