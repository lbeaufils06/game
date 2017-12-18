<?php

    class proposition
    {
        private $arrayId = array();
        private $proposition = "";
        private $killProposition = "";
        public function __construct() {}
        public function createProposition($name,$nameKill) {
            $this->arrayId[$name]["name"] = $name;
            $this->arrayId[$name]["kill"] = $nameKill;
        }
        public function getProposition()
        {
            return $this->arrayId;
        }
    }

?>