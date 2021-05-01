<?php
require  "vendor/autoload.php";
use Acme\Book;
use Acme\BookInterface;
use Acme\Kindle;
use Acme\KindleAdapter;
class Person 
{
    public function Read(BookInterface $book)
    {
        $book->open();
        $book->turnpage();
    }
}

return (new Person())->Read(new KindleAdapter(new Kindle));


