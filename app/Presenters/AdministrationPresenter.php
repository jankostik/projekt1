<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Model\DatabaseFunctions;
use App\Model\Data\CategoryFormFactory;
use App\Forms\SignInFormFactory;
use App\Forms\SignUpFormFactory;
use App\Presenters\BasePresenter;
use Nette\Application\AbortException;
use Nette\Application\UI\Form;


class AdministrationPresenter extends BasePresenter
{

    /** @var CategoryFormFactory @inject */
	public $categoryFormFactory;

    private SignInFormFactory $signInFactory;

    
    private SignUpFormFactory $signUpFactory;

    
    public function __construct(SignInFormFactory $signInFactory, SignUpFormFactory $signUpFactory)
    {
        parent::__construct();
        $this->signInFactory = $signInFactory;
        $this->signUpFactory = $signUpFactory;
    }


    //přihlásí uživatele
    public function actionLogin()
    {
        if ($this->getUser()->isLoggedIn()) $this->redirect('Administration:');
    }

    
    //Odhlásí uživatele a přesměruje na přihlašovací stránku.
    public function actionLogout()
    {
        $this->getUser()->logout();
        $this->redirect('login');
    }


    //Předá jméno přihlášeného uživatele do šablony administrační stránky.
    public function renderDefault()
    {

        if ($this->getUser()->isLoggedIn())
            $this->template->username = $this->user->identity->username;
    }

    
    //Vytváří a vrací přihlašovací formulář pomocí továrny.
    protected function createComponentLoginForm()
    {
        return $this->signInFactory->create(function () {
            $this->flashMessage('Byl jste úspěšně přihlášen.');
            $this->redirect('Administration:');
        });
    }

    
    //Vytváří a vrací registrační formulář pomocí továrny.
    protected function createComponentRegisterForm()
    {
        return $this->signUpFactory->create(function (): void {
            $this->flashMessage('Byl jste úspěšně zaregistrován.');
            $this->redirect('Administration:');
        });
    }


    /**********EDITACE KATEGORIÍ******************************************************************************/


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
                    $this->flashMessage("kategorie byla vytvořena");
                    $this->redirect('Games:default');
                } 
                else{
                    $this->flashMessage("kategorie byla upravena");
                    $this->redirect('Games:default');
                }
            };

        return $form;
    }


//změní roli uživateli member => admin
    public function actionChangeRole()
    {
        $user = $this->getUser();
        $this->databaseFunctions->changeRole($user->getId());
        $this->getUser()->logout();
        $this->flashMessage("Výborně jste admin! Musíte se znovu přihlásit, kvůli uložení nové role.");
        $this->redirect('Administration:default');
        
    }
}