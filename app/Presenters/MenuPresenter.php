<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Model\DatabaseFunctions;


class MenuPresenter extends BasePresenter
{

	protected $databaseFunctions;

	public function __construct(DatabaseFunctions $databaseFunctions)
	 {
		 parent::__construct();
		 $this->databaseFunctions = $databaseFunctions;
	 }

	public function beforeRender()
	{
		$this->template->menu = $this->databaseFunctions->getCategories();
	}
}