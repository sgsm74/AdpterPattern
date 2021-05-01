<?php
namespace Acme;

class Kindle implements eReaderInterface {
    public function turnOne()
    {
        var_dump("turn on the kindle");
    }
    public function pressNextButton()
    {
        var_dump("press next button kindel");
    }
}