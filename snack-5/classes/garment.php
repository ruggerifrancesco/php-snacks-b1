<?php
    class Garment {
        protected string $material;
    
        public function __construct(string $_material) {
            $this->material = $_material;
        }
    
        protected function getDetails() {
            return $this->material;
        }
    }
?>
