<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;
	

	public static function createRouter(): RouteList
	{
		$router = new RouteList;
		$router->addRoute('administrace', 'Administration:default');

		$router->addRoute('<action>', [
			'presenter' => 'Administration',
			'action' => [
				Route::FILTER_STRICT => true,
				Route::FILTER_TABLE => [
					'administrace' => 'default',
					'prihlaseni' => 'login',
					'odhlasit' => 'logout',
					'registrace' => 'register'
				]
			]
		]);


		$router->addRoute('<action>[<category_id>]', [
			'presenter' => 'Games',
			'action' => [
				Route::FILTER_STRICT => true,
				Route::FILTER_TABLE => [
					'Hry' => 'list',
					
					]
				]
		]);


		$router->addRoute('kategorie/<category_id>', 'Games:list');
		$router->addRoute('kategorie/<category_id>/hra/<game_url>', 'Games:show');

		$router->addRoute('<presenter>/<action>', 'Games:default');
		return $router;
	}
}
