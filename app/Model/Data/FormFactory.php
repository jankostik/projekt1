<?php

namespace App\Model\Data;

use Nette\Application\UI\Form;
use Nette\Forms\IFormRenderer;

class FormFactory
{
    
    /** @var IFormRenderer */
	protected $renderer;

    public function __construct(IFormRenderer $renderer = NULL)
    {
        $this->renderer = $renderer;
    }


    /**
     * @return Form
     */
    public function create()
    {
        $form = new Form;
        
        $form->onSuccess['save'] = function(){};
        $form->onSuccess['afterSave'] = [$this, 'afterSave'];
        $form->setRenderer($this->renderer);

        return $form;
    }


    /**
     * Jen provizorní/defaultní přesměrování, jinak to má řešit komponenta, nebo presenter.
     */
    public function afterSave(Form $form, $values)
    {
        trigger_error('Ošetřete tento callback v komponentě, nebo presenteru.', E_USER_NOTICE);
        $form->presenter->redirect('Games:list');
    }
}