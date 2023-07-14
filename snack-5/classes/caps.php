<?php 
    include_once __DIR__ .  '/garment.php';

    class Caps extends Garment {
        protected string $color;
    
        public function __construct(string $_material, string $_color) {
            parent::__construct($_material);
            $this->color = $_color;
        }
    
        public function getColor(): string {
            return $this->color;
        }
    }
?>