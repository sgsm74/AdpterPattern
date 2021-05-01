<?php
namespace Acme;

class KindleAdapter implements BookInterface{

    protected $kindle;

    public function __construct(Kindle $kindle){
        $this->kindle = $kindle;
    }

    public function open()
    {
        return $this->kindle->turnOne();
    }

    public function turnpage()
    {
        return $this->kindle->pressNextButton();
    }

}