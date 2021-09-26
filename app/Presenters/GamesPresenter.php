<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Model\DatabaseFunctions;

class GamesPresenter extends BasePresenter
{

    private $databaseFunctions;

    public function __construct(databaseFunctions $databaseFunctions)
    {
        parent::__construct();
        $this->databaseFunctions = $databaseFunctions;
    }

    public function beforeRender()
	{
		$this->template->menu = $this->databaseFunctions->getCategories();
	}
    
    public function renderList($category_url)
    {
        $this->template->gamesList = $this->databaseFunctions->getGamesByCategory($category_url);
    }
}