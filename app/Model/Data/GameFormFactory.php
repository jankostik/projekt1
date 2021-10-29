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

        $selectItems = $this->databaseFunctions->getCategoriesAssoc();

        $form->addHidden('game_id');
        $form->addText('game_title', 'název hry:')->setRequired()
        ->addRule($form::MIN_LENGTH, 'minimální délka: 3', 3);

        //$form->addText('category_url', 'url adresa kategorie hry');
        $form->addText('game_url', 'url hry:')->setRequired()
        ->addRule($form::PATTERN, 'url adresu zadejte bez mezer a interpunkce prosím', '[a-z,A-Z]+')
        ->addRule($form::MIN_LENGTH, 'minimální délka: 3', 3);
        
        $form->addTextArea('game_text', 'pravidla hry:')->setRequired()
        ->addRule($form::MIN_LENGTH, 'minimální délka: 3', 3);

        $form->addText('game_description', 'popis hry:')->setRequired()
        ->addRule($form::MIN_LENGTH, 'minimální délka: 3', 3);
        
        $form->addSelect('category_id', 'kategorie:', $selectItems);

        $form->onSuccess['save'] = [$this, 'save'];

        return $form;

    }


    /**
	 * Jen persistence dat. Přesměrování, flashmessage a podobné rutiny musí zařídit komponenta, nebo presenter.
	 */
    public function save(Form $form, $values)
    {
        if (empty($values->game_id)) {
            unset($values->game_id);
            $this->databaseFunctions->saveGame($values);
        } else {
            $this->databaseFunctions->editGame($values);
        }
    }
    
}