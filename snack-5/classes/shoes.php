<?php 
    include_once __DIR__ . '/garment.php';

    class Shoes extends Garment {
        protected string $size;
    
        public function __construct(string $_material, string $_size) {
            parent::__construct($_material);
            $this->size = $_size;
        }
    
        public function getSize(): string {
            return $this->size;
        }
    }
?>