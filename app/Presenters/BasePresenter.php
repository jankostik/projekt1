<?php

declare(strict_types=1);

namespace App\Presenters;


use Nette;
use App\Forms\FormFactory;
use Nette\Application\AbortException;
use Nette\Application\UI\Presenter;


/**
 * Base presenter for all application presenters.
 */
//abastract class - zjistit si o tom popripadě upravit
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    use Traits\Menu;

    protected FormFactory $formFactory;

    /**
     * Získává továrnu na formuláře pomocí DI.
     * @param FormFactory $formFactory automaticky injektovaná továrna na formuláře
     */
    public final function injectFormFactory(FormFactory $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    /**
     * Na začátku každé akce u všech presenterů zkontroluje uživatelská oprávnění k této akci.
     * @throws AbortException Jestliže uživatel nemá oprávnění k dané akci a bude přesměrován.
     */
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

