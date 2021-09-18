<?php

declare(strict_types=1);

/*  
Model pro správu her.
definuje metody, které pomáhají manipulovat s tabulkou games
*/

namespace App\Model;

use App\Model\DatabaseManager;
use Nette\Database\Table\ActiveRow;
use Nette\Database\Table\Selection;
use Nette\Utils\ArrayHash;

class GamesManager extends DatabaseManage
{
    const 
        TABLE_NAME = 'games',
        COLUMN_ID = 'game_id',
        COLUMN_URL = 'url';


    //získá všechny hry z tabulky
    public function getGames()
    {
        return $this->database->table(self::TABLE_NAME)->order(self::COLUMN_ID . 'DESC');
    }


    //získá z tabulky hru podle url
    public function getGame($url)
    {
        return $this->database->table(self::TABLE_NAME)->where(self::COLUMN_URL, $url)->fetch();
    }


    //uloží nebo updatuje hru
    public function saveGame(ArrayHash $games)
    {
        if(empty($games[self::COLUMN_ID])){
            unset($games[self::COLUMN_ID]);
            $this->database->table(self::TABLE_NAME)->insert($games);
        } else {
            $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $games[self::COLUMN_ID])->update($games);
        }
    }


    //vymaže hru
    public function removeGame(string $url)
    {
        $this->database->table(self::TABLE_NAME)->where(self::COLUMN_URL, $url)->delete();
    }
}