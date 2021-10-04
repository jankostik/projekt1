<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


/**
 * Base presenter for all application presenters.
 */
//abastract class - zjistit si o tom popripadě upravit
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    use Traits\Menu;
}

