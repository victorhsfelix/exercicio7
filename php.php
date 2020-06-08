<?php
    function calcular($diretor = 100, $comum = 10, $estagiario = 1){
        $r = array(0 => ($diretor/100)*20, 1 => ($comum/100)*10, 2 => ($estagiario/100)*5);
        echo "$r[0]<br/>$r[1]<br/>$r[2]";
    } 
    calcular();
?>