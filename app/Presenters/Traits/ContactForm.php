<?php

declare(strict_types=1);

namespace App\Presenters\Traits;

use App\Model\DatabaseFunctions;

trait ContactForm
{

    private $databaseFunctions;

	public function injectDatabaseFunctions(DatabaseFunctions $databaseFunctions) :void
    {
        $this->databaseFunctions = $databaseFunctions;
    }

    public function actionEditor(string $url = null)
    {
        if ($url) {
            if (!($article = $this->articleManager->getArticle($url)))
                $this->flashMessage('Článek nebyl nalezen.'); 
            else $this['editorForm']->setDefaults($article); 
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