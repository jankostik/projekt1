<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Model\DatabaseFunctions;
use App\Model\Data\GameFormFactory;

class AdministrationPresenter extends BasePresenter
{

    /** @var GameFormFactory @inject */
	public $gameFormFactory;

    
    protected function createComponentGameForm()
    {
        $form = $this->gameFormFactory->create();

        $form->onSuccess['afterSave'] =
            function($form, $values)
            {
                if (empty($url)) { #nový záznam
                    $this->flashMessage("hra byla vytovřena");
                } 
                else{
                    $this->flashMessage("hra byla upravena");
                }
            };

        return $form;
    }
}