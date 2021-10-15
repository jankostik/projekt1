<?php

namespace App\Model\Data;

use Nette\Application\UI\Form;
use App\Model\DatabaseFunctions;


class GameFormFactory
{

    /** @var FormFactory */
    protected $formFactory;

    /** @var DatabaseFunctions */
    protected $databaseFunctions;


    public function __construct(FormFactory $formFactory, DatabaseFunctions $databaseFunctions)
    {
        $this->formFactory = $formFactory;
        $this->databaseFunctions = $databaseFunctions;
    }


    /** 
     * @return Form 
     */
    public function create()
    {
        $form = $this->formFactory->create();

        $form->addText('game_url', 'url adresa hry');
        $form->addText('category_url', 'url adresa kategorie hry');
        $form->addText('game_title', 'název hry');
        $form->addText('game_description', 'popis hry');
        $form->addText('game_content', 'pravidla hry');

        $form->onSuccess['save'] = [$this, 'save'];
        $form->onSuccess['edit'] = [$this, 'edit'];

        return $form;

    }


    /**
	 * Jen persistence dat. Přesměrování, flashmessage a podobné rutiny musí zařídit komponenta, nebo presenter.
	 */
    public function save(Form $form, $values)
    {
        $this->databaseFunctions->saveGame($values);
    }
    public function edit(Form $form, $values)
    {
        $this->databaseFunctions->editGame($values);
    }
}