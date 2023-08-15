<?php 

class Payment
{
    protected int $total;

    public function __construct(int $totalParam = 0) {
        $this->total = $totalParam;
    }

    public function getTotal(){
        return $this->total;
    }

    public function getPotonganPegawai(){
        $this->total -= 10000;
    }
}

class PaymentBCA extends Payment
{
    private bool $isPegawaiBCA;

    public function pay() {
        return "sudah dibayar melalui BCA sebesar {$this->total} \n";
    }

    public function setIsPegawaiBCA($param = 0) {
        $this->isPegawaiBCA = $param;
    }

    // public function getPotonganPegawai(){
    //     $this->total -= 50000;
    // }
}


?>