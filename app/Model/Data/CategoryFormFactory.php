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

        

        $form->addText('category_url', 'url adresa kategorie')->setRequired();
        $form->addText('category_title', 'název kategorie')->setRequired();
        $form->addHidden('category_id');

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