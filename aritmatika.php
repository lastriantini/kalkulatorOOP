<?php
class aritmatika {
    public $a, $b ;

    public function setTambah($a, $b) {
        $this->a = $a;
        $this->b = $b;

        return $this->a + $this->b ;
    }

    public function setKurang($a, $b) {
        $this->a = $a;
        $this->b = $b;

        return $this->a - $this->b ;
    }

    public function setKali($a, $b) {
        $this->a = $a;
        $this->b = $b;

        return $this->a * $this->b ;
    }

    public function setBagi($a, $b) {
        $this->a = $a;
        $this->b = $b;

        return $this->a / $this->b ;
    }

    public function setModulus($a, $b) {
        $this->a = $a;
        $this->b = $b;

        return $this->a % $this->b ;
    }
}
