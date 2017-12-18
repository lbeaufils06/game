<?php

    class navigator 
    {
        public function navigatorIn($resultClient,$arrayName) {

            if(!empty($_GET['value'])) {
                $resultClient = $_GET['value'];
            } else {
                if (!defined("STDIN")) {
                    ?><link href="css/index.css" rel="stylesheet" type="text/css" media="all" /><?php
                    print('<div id="title">Pierre Feuille Ciseaux ?</div>');
                    print('<div id="selection">');
                    print('<div id="pierre"><a href="index.php/?value=pierre"><img id="image" src="data/stone.jpg"></a></div>');
                    print('<div id="feuille"><a href="index.php/?value=feuille"><img id="image" src="data/paper.jpg"></a></div>');
                    print('<div id="ciseaux"><a href="index.php/?value=ciseaux"><img id="image" src="data/scissors.jpg"></a></div>');
                    print('</div>');
                }
            }
            return $resultClient;
        }

        public function navigatorOut($resultClient,$resultComputer,$analyseResult) {
            if(!empty($_GET['value'])) {
                ?><link href="../css/index.css" rel="stylesheet" type="text/css" media="all" /><?php
                print('<div id="title">Resultat : </div>');
                print('<div id="title">Vous : '.$resultClient.' VS Computer : '.$resultComputer.'</div>');
                print('<div id="title">Le gagnant : '.$analyseResult.'</div>');
            }
        }
    }
?>