<?php

    require("src/proposition.php");
    require("src/console.php");
    require("src/navigator.php");
    require("src/analyse.php");

    $proposition = new proposition();
    $console = new console();
    $navigator = new navigator();

    // createProposition : name and killName
    $proposition->createProposition("pierre","ciseaux");
    $proposition->createProposition("feuille","pierre");
    $proposition->createProposition("ciseaux","feuille");
    // get array proposition
    $arrayProposition = $proposition->getProposition();
    // get array name of all proposition
    $arrayName = array_keys($arrayProposition);
    // resultClient is null
    $resultClient = null;
    // mode console
    $resultClient = $console->consoleIn($resultClient,$arrayName);
    // mode navigator
    $resultClient = $navigator->navigatorIn($resultClient,$arrayName);
    // computer proposition
    $resultComputer = computer($arrayName);
    // analyse proposition client and computer
    $analyseResult = analyse($resultClient,$resultComputer,$arrayProposition);

    // display console return result game
    $console->consoleOut($resultClient,$resultComputer,$analyseResult);
    // display navigator return result game
    $navigator->navigatorOut($resultClient,$resultComputer,$analyseResult);

?>
