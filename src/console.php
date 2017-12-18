<?php

    class console
    {
        public function consoleIn($resultClient,$arrayName) {
            if (defined("STDIN")) {
                print_r(" ----------------------------------------\n");
                print_r(" Pierre (p) - Feuille (f) - Ciseaux (c) ?\n");
                print_r(" ----------------------------------------\n");
                print_r(" Votre proposition : ");
                $reponse = fgets(STDIN);
                $reponse = strval(strtolower(trim($reponse)));
                $countarrayName = count($arrayName);
                for($i=0;$i<$countarrayName;$i++) {
                    if($reponse == $arrayName[$i] || $reponse == substr($arrayName[$i], 0, 1)) {
                        $reponse = $arrayName[$i];
                        $resultClient = $reponse;
                    }
                }
            }
            return $resultClient;
        }

        public function consoleOut($resultClient,$resultComputer,$analyseResult) {
            if (defined("STDIN")) {
                print_r(" ----------------------------------------\n");
                if(!empty($resultClient)) {
                    print(" Vous : ".$resultClient." VS Computer : ".$resultComputer."\n");
                    print_r(" Le gagnant : ".$analyseResult."\n");
                } else {
                    print(" Mauvaise Proposition\n");
                }
                print_r(" ----------------------------------------\n");
            }
        }
    }
?>