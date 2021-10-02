<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Presenters\MenuPresenter;
use App\Model\DatabaseFunctions;

class GamesPresenter extends MenuPresenter
{


    public function renderList($category_url)
    {
        $this->template->gamesList = $this->databaseFunctions->getGamesByCategory($category_url);
    }

    public function renderShow($game_url)
    {
        $this->template->game = $this->databaseFunctions->getGame($game_url);
    }
    //až vše bude fungovat tak, ať je možnost i mazaz a upravovat kategorie
    public function actionRemove($category_url, string $url = null)
    {
        $this->DatabaseFunctions->removeGame($url);
        $this->flashMessage('Hra Byla úspěšně odstraněna');
        $this->redirect('Games:list $category_url');
    }

    public function actionEditor(string $url = null)
    {
        if ($url) {
            if (!($game = $this->DatabaseFunctions->getGame($url)))
                $this->flashMessage('Hra nebyla nalezena.');
            else $this['editForm']->setDefaults($game);
        }
    }

    protected function createComponentEditorForm()
    {
        // Vytvoření formuláře a definice jeho polí.
        $form = new Form;
        $form->addHidden('article_id');
        $form->addText('title', 'Titulek')->setRequired();
        $form->addText('url', 'URL')->setRequired();
        $form->addText('description', 'Popisek')->setRequired();
        $form->addTextArea('content', 'Obsah');
        $form->addSubmit('save', 'Uložit článek');

        // Funkce se vykonaná při úspěšném odeslání formuláře a zpracuje zadané hodnoty.
        $form->onSuccess[] = function (Form $form, ArrayHash $values) {
            try {
                $this->articleManager->saveArticle($values);
                $this->flashMessage('Článek byl úspěšně uložen.');
                $this->redirect('Article:', $values->url);
            } catch (UniqueConstraintViolationException $e) {
                $this->flashMessage('Článek s touto URL adresou již existuje.');
            }
        };

        return $form;
    }
}