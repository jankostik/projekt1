<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Model\DatabaseFunctions;
use App\Model\Data\CategoryFormFactory;

class AdministrationPresenter extends BasePresenter
{

    /** @var CategoryFormFactory @inject */
	public $categoryFormFactory;

    public function actionNewC()
    {
        $this['categoryForm']->addSubmit('save', 'přidat kategorii');
    }


    public function actionEditC($url)
    {
        $this['categoryForm']->addSubmit('edit', 'upravit kategorii');
        $this['categoryForm']->setDefaults($this->databaseFunctions->getCategory($url));
    }


    protected function createComponentCategoryForm()
    {
        $form = $this->categoryFormFactory->create();

        $form->onSuccess['afterSave'] =
            function($form, $values)
            {
                if (empty($values->category_id)) { #nový záznam
                    $this->flashMessage("kategorie byla vytovřena");
                } 
                else{
                    $this->flashMessage("kategorie byla upravena");
                }
            };

        return $form;
    }
}