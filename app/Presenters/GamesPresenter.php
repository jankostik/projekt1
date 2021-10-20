<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Model\DatabaseFunctions;
use App\Model\Data\GameFormFactory;

class GamesPresenter extends BasePresenter
{

    

    /** @var GameFormFactory @inject */
	public $gameFormFactory;

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
                    $this->redirect('Games:show', $values->game_url );
                    $this->flashMessage("hra byla vytvořena");
                } 
                else{
                    $this->flashMessage("hra byla upravena");
                    $this->redirect('Games:show', $values->game_url );
                }
            };

        return $form;
    }





    /**funkce pro vykreslováni obsahu */
    public function renderList($category_url)
    {
        $this->template->gamesList = $this->databaseFunctions->getGamesByCategory($category_url);
    }

    public function renderShow($game_url)
    {
        $this->template->game = $this->databaseFunctions->getGame($game_url);
    }
    //až vše bude fungovat tak, ať je možnost i mazaz a upravovat kategorie
    public function actionRemove(string $url = null, $category_id)
    {
        $this->databaseFunctions->removeGame($url);
        $this->flashMessage('Hra Byla úspěšně odstraněna');
        $this->redirect('Games:list', $category_id);
    }

   
    
}