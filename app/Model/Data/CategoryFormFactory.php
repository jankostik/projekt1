<?php

namespace App\Model\Data;

use Nette\Application\UI\Form;
use App\Model\DatabaseFunctions;



class CategoryFormFactory
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

        
        $form->addHidden('category_id');
        $form->addText('category_url', 'url adresa kategorie:')->setRequired()
        ->addRule($form::PATTERN, 'url adresu zadejte bez mezer a interpunkce prosím', '[a-z,A-Z]+')
        ->addRule($form::MIN_LENGTH, 'minimální délka: 3', 3);

        $form->addText('category_title', 'název kategorie:')->setRequired()
        ->addRule($form::MIN_LENGTH, 'zadejte mnimální dělku prosím: 3', 3);

        $form->onSuccess['save'] = [$this, 'save'];

        return $form;

    }


    public function save(Form $form, $values)
    {
        if (empty($values->category_id)) {
            unset($values->category_id);
            $this->databaseFunctions->saveCategory($values);
        } else {
            $this->databaseFunctions->editCategory($values);
        }
    }
}