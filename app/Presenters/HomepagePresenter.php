<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Model\DatabaseFunctions;


final class HomepagePresenter extends BasePresenter
{

	protected $databaseFunctions;

	public function injectDatabaseFunctions(DatabaseFunctions $databaseFunctions) :void
    {
        $this->databaseFunctions = $databaseFunctions;
    }

	public function beforeRender()
	{
		$this->template->menu = $this->databaseFunctions->getCategories();
	}
}
