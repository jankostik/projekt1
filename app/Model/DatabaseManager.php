<?php

declare(strict_types=1);

namespace App\Model;

use Nette\Database\Explorer;
use Nette\SmartObject;


//Abstraktní třída která zajistí připojení k databázi
class DatabaseManager
{
    //nastavuje přísnější pravidla a pomáhá odhlit více chyb
    use SmartObject;

    protected Explorer $database;

    public function __construct(Explorer $database)
    {
        $this->database = $database;
    }
}