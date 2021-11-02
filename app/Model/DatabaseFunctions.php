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

class DatabaseFunctions extends DatabaseManager
{
    const 
        //konstanty pro hry
        GAME_TABLE = 'games',
        GAME_URL = 'game_url',
        GAME_ID = "game_id",

        //konstanty pro kategorie
        CATEGORY_TABLE = 'categories',
        CATEGORY_URL = 'category_url',
        CATEGORY_ID = 'category_id';


    //získá všechny hry z tabulky
    public function getGames()
    {
        return $this->database->table(self::GAME_TABLE)->order(self::GAME_ID . ' DESC');
    }


    //získá z tabulky hru podle url
    public function getGame($url)
    {
        return $this->database->table(self::GAME_TABLE)->where(self::GAME_URL, $url)->fetch();
    }

    public function getGamesByCategory($category_id)
    {
        return $this->database->table(self::GAME_TABLE)->where(self::CATEGORY_ID, $category_id);
    }


    //uloží nebo updatuje hru
    public function saveGame(ArrayHash $games)
    {
        $this->database->table(self::GAME_TABLE)->insert($games);
    }

    public function editGame(ArrayHash $games)
    {
        $this->database->table(self::GAME_TABLE)->where(self::GAME_ID, $games[self::GAME_ID])->update($games);
    }

    //vymaže hru
    public function removeGame(string $url)
    {
        $this->database->table(self::GAME_TABLE)->where(self::GAME_URL, $url)->delete();
    }

    //získá všechny kategorie z tabulky
    public function getCategories()
    {
        return $this->database->table(self::CATEGORY_TABLE)->order(self::CATEGORY_URL);
    }

    public function getCategoriesAssoc()
    {
        return $this->getcategories()->fetchAssoc('category_id=category_url');
    }

    public function saveCategory($category)
    {
        $this->database->table(self::CATEGORY_TABLE)->insert($category);
    }

    public function editCategory(ArrayHash $category)
    {
        //$this->database->table(self::CATEGORY_TABLE)->where(self::CATEGORY_URL, $category[self::CATEGORY_URL])->update($category);
        $this->database->table(self::CATEGORY_TABLE)->where(self::CATEGORY_ID, $category[self::CATEGORY_ID])->update($category);
    }

    public function getCategory($url)
    {
        return $this->database->table(self::CATEGORY_TABLE)->where(self::CATEGORY_URL, $url)->fetch();
    }

    public function getCategoryById ($category_id)
    {
        return $this->database->table(self::CATEGORY_TABLE)->where(self::CATEGORY_ID, $category_id)->fetch();
    }
}