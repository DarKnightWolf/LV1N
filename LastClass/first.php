<?php 
$soma=0;
$media=0;
$valores = array(10,30,80,100);
//soma   &&    média
foreach($valores as $v){//
    $soma += $v;
};
echo "\n{$soma}.";
$media=$soma/count($valores);
echo "\n\n";
echo "\n$media.";




?>