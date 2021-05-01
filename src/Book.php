<?php
namespace Acme;
class Book implements BookInterface
{
    public function open()
    {
        var_dump("Open Book");
    }

    public function turnPage()
    {
        var_dump("Turn the page");
    }
}
