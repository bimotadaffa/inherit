<?php 

class Discount 
{
    private int $totalBelanja;

    public function __construct(int $totalBelanjaParam = 0) {
        $this->totalBelanja = $totalBelanjaParam;
    }

    public function countDiscount(): int {
        if ($this->totalBelanja >= 100000) {
            return 20000;
        } else if ($this->totalBelanja < 100000 && $this->totalBelanja >= 50000) {
            return 10000;
        } else if ($this->totalBelanja < 50000) {
            return 5000;
        }
    }

    
}


?>