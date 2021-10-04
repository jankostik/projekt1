<?php

declare(strict_types=1);

namespace App\Presenters\Traits;

use App\Model\DatabaseFunctions;

trait Menu
{
    
    private $databaseFunctions;

	public function injectDatabaseFunctions(DatabaseFunctions $databaseFunctions) :void
    {
        $this->databaseFunctions = $databaseFunctions;
    }

    protected function beforeRender()
	{
		$this->template->menu = $this->databaseFunctions->getCategories();
	}
}