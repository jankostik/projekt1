<?php

declare(strict_types=1);

namespace App\Presenters;


use Nette;
use App\Forms\FormFactory;
use Nette\Application\AbortException;
use Nette\Application\UI\Presenter;


abstract class BasePresenter extends Nette\Application\UI\Presenter
{

    //trait pro vygenerování menu pro každý presenter
    use Traits\Menu;

    protected FormFactory $formFactory;

   
    public final function injectFormFactory(FormFactory $formFactory)
    {
        $this->formFactory = $formFactory;
    }

   
    protected function startup()
    {
        parent::startup();
        if (!$this->getUser()->isAllowed($this->getName(), $this->getAction())) {
            $this->flashMessage('Nejsi přihlášený nebo nemáš dostatečná oprávnění.');
            $this->redirect('Administration:login');
        }
    }


    public function handleSearch ($query)
    {
        $this->data = $query;
        dump($this->data);
    }
}

