<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Model\DatabaseFunctions;
use App\Model\Data\GameFormFactory;


class GamesPresenter extends BasePresenter
{

    /** @var GameFormFactory @inject */
	public $gameFormFactory;

    
/******EDITECE HER ***********************************************************************************/


    public function actionNew()
    {
        $this['gameForm']->addSubmit('save', 'přidat hru');
    }


    public function actionEdit($url)
    {
        $this['gameForm']->addSubmit('edit', 'upravit hru');
        $this['gameForm']->setDefaults($this->databaseFunctions->getGame($url));
    }


    protected function createComponentGameForm()
    {
        $form = $this->gameFormFactory->create();

        $form->onSuccess['afterSave'] =
            function($form, $values)
            {
                if (empty($values->game_id)) { #nový záznam
                    $category = $this->databaseFunctions->getCategoryById($values->category_id);
                    $this->flashMessage("hra byla vytvořena");
                    $this->redirect('Games:show', $values->game_url, $category->category_title);
                    
                } 
                else{
                    $category = $this->databaseFunctions->getCategoryById($values->category_id);
                    $this->flashMessage("hra byla upravena");
                    $this->redirect('Games:show', $values->game_url, $category->category_title );
                }
            };

        return $form;
    }


    /**funkce pro vykreslováni obsahu *************************************************/


    //vyrenderuje hry podle toho do jaké kategorie patří
    public function renderList($category_id)
    {
        $category = $this->databaseFunctions->getCategoryById($category_id);
        $this->template->gamesList = $this->databaseFunctions->getGamesByCategory($category->category_id);
        $this->template->category_title = $category->category_title;
    }


    //zobrazí detaily hry
    public function renderShow($game_url, $category_id)
    {
        $this->template->game = $this->databaseFunctions->getGame($game_url);
        $this->template->urlType = $category_id;
        dump($category_id);
       
    }


    //vymaže hru
    public function actionRemove(string $url = null, $category_id)
    {
        $this->databaseFunctions->removeGame($url);
        $category = $this->databaseFunctions->getCategoryById($category_id);
        $this->flashMessage('Hra Byla úspěšně odstraněna');
        $this->redirect('Games:list', $category_id);
    }


    //vyrenderuje všechny hry v databázi
    public function renderDefault()
    {
        $this->template->games = $this->databaseFunctions->getGames();
    }

}