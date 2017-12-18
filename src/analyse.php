<?php

    function computer($proposition) {
        $numberGen = rand(0,2);
        return $proposition[$numberGen];
    }

    function analyse($resultClient,$resultComputer,$arrayProposition) {
        $win = "Egalite";
        if(!empty($arrayProposition[$resultClient]) && $arrayProposition[$resultClient]["kill"] == $resultComputer) 
            $win = "Vous";
        if(!empty($arrayProposition[$resultComputer]) && $arrayProposition[$resultComputer]["kill"] == $resultClient) 
            $win = "Computer";
        return $win;
    }

?>