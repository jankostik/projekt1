<?php
// source: /var/www/sites/Nette/projekt1/config/common.neon
// source: /var/www/sites/Nette/projekt1/config/local.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_0d26a4f28b extends Nette\DI\Container
{
	protected $tags = [
		'nette.inject' => [
			'08' => true,
			'application.1' => true,
			'application.2' => true,
			'application.3' => true,
			'application.4' => true,
			'application.5' => true,
			'application.6' => true,
		],
	];

	protected $types = ['container' => 'Nette\DI\Container'];

	protected $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'database.default' => 'database.default.connection',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.authorizator' => 'security.authorizator',
		'nette.database.default' => 'database.default',
		'nette.database.default.context' => 'database.default.context',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Database\Connection' => [['database.default.connection']],
		'Nette\Database\IStructure' => [['database.default.structure']],
		'Nette\Database\Structure' => [['database.default.structure']],
		'Nette\Database\Conventions' => [['database.default.conventions']],
		'Nette\Database\Conventions\DiscoveredConventions' => [['database.default.conventions']],
		'Nette\Database\Explorer' => [['database.default.context']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Bridges\ApplicationLatte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\IUserStorage' => [['security.legacyUserStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Security\Authorizator' => [['security.authorizator']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Nette\Routing\RouteList' => [['router']],
		'Nette\Routing\Router' => [['router']],
		'ArrayAccess' => [2 => ['router', '08', 'application.2', 'application.3', 'application.4']],
		'Countable' => [2 => ['router']],
		'IteratorAggregate' => [2 => ['router']],
		'Traversable' => [2 => ['router']],
		'Nette\Application\Routers\RouteList' => [['router']],
		'Nette\Security\Authenticator' => [['authenticator']],
		'Nette\Security\IAuthenticator' => [['authenticator']],
		'App\Model\UserManager' => [['authenticator']],
		'App\Forms\FormFactory' => [['01']],
		'App\Forms\SignInFormFactory' => [['02']],
		'App\Forms\SignUpFormFactory' => [['03']],
		'App\Model\Data\GameFormFactory' => [['04']],
		'App\Model\Data\CategoryFormFactory' => [['05']],
		'App\Model\Data\FormFactory' => [['06']],
		'App\Model\DatabaseManager' => [['07']],
		'App\Model\DatabaseFunctions' => [['07']],
		'App\Presenters\BasePresenter' => [2 => ['08', 'application.2', 'application.3', 'application.4']],
		'Nette\Application\UI\Presenter' => [2 => ['08', 'application.2', 'application.3', 'application.4']],
		'Nette\Application\UI\Control' => [2 => ['08', 'application.2', 'application.3', 'application.4']],
		'Nette\Application\UI\Component' => [2 => ['08', 'application.2', 'application.3', 'application.4']],
		'Nette\ComponentModel\Container' => [2 => ['08', 'application.2', 'application.3', 'application.4']],
		'Nette\ComponentModel\Component' => [2 => ['08', 'application.2', 'application.3', 'application.4']],
		'Nette\ComponentModel\IComponent' => [2 => ['08', 'application.2', 'application.3', 'application.4']],
		'Nette\ComponentModel\IContainer' => [2 => ['08', 'application.2', 'application.3', 'application.4']],
		'Nette\Application\UI\SignalReceiver' => [2 => ['08', 'application.2', 'application.3', 'application.4']],
		'Nette\Application\UI\StatePersistent' => [2 => ['08', 'application.2', 'application.3', 'application.4']],
		'Nette\Application\UI\Renderable' => [2 => ['08', 'application.2', 'application.3', 'application.4']],
		'Nette\Application\IPresenter' => [
			2 => [
				'08',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
			],
		],
		'App\Presenters\ContactPresenter' => [2 => ['08']],
		'App\Presenters\ErrorPresenter' => [2 => ['application.1']],
		'App\Presenters\AdministrationPresenter' => [2 => ['application.2']],
		'App\Presenters\Error4xxPresenter' => [2 => ['application.3']],
		'App\Presenters\GamesPresenter' => [2 => ['application.4']],
		'NetteModule\ErrorPresenter' => [2 => ['application.5']],
		'NetteModule\MicroPresenter' => [2 => ['application.6']],
		'Nette\Forms\FormFactory' => [['forms.factory']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'contactEmail' => 'jan.kostik5@gmail.com',
			'appDir' => '/var/www/sites/Nette/projekt1/app',
			'wwwDir' => '/var/www/sites/Nette/projekt1/www',
			'vendorDir' => '/var/www/sites/Nette/projekt1/vendor',
			'debugMode' => true,
			'productionMode' => false,
			'consoleMode' => false,
			'tempDir' => '/var/www/sites/Nette/projekt1/temp',
		];
	}


	public function createService01(): App\Forms\FormFactory
	{
		return new App\Forms\FormFactory;
	}


	public function createService02(): App\Forms\SignInFormFactory
	{
		return new App\Forms\SignInFormFactory($this->getService('01'), $this->getService('security.user'));
	}


	public function createService03(): App\Forms\SignUpFormFactory
	{
		return new App\Forms\SignUpFormFactory($this->getService('01'), $this->getService('authenticator'));
	}


	public function createService04(): App\Model\Data\GameFormFactory
	{
		return new App\Model\Data\GameFormFactory($this->getService('06'), $this->getService('07'));
	}


	public function createService05(): App\Model\Data\CategoryFormFactory
	{
		return new App\Model\Data\CategoryFormFactory($this->getService('06'), $this->getService('07'));
	}


	public function createService06(): App\Model\Data\FormFactory
	{
		return new App\Model\Data\FormFactory;
	}


	public function createService07(): App\Model\DatabaseFunctions
	{
		return new App\Model\DatabaseFunctions($this->getService('database.default.context'));
	}


	public function createService08(): App\Presenters\ContactPresenter
	{
		$service = new App\Presenters\ContactPresenter('jan.kostik5@gmail.com', $this->getService('mail.mailer'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectFormFactory($this->getService('01'));
		$service->injectDatabaseFunctions($this->getService('07'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__1(): App\Presenters\ErrorPresenter
	{
		return new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__2(): App\Presenters\AdministrationPresenter
	{
		$service = new App\Presenters\AdministrationPresenter($this->getService('02'), $this->getService('03'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectFormFactory($this->getService('01'));
		$service->injectDatabaseFunctions($this->getService('07'));
		$service->categoryFormFactory = $this->getService('05');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__3(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectFormFactory($this->getService('01'));
		$service->injectDatabaseFunctions($this->getService('07'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__4(): App\Presenters\GamesPresenter
	{
		$service = new App\Presenters\GamesPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectFormFactory($this->getService('01'));
		$service->injectDatabaseFunctions($this->getService('07'));
		$service->gameFormFactory = $this->getService('04');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__5(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__6(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('router'));
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response')
		);
		$service->catchExceptions = null;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel(
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('application.presenterFactory')
		));
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('router'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory')
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback(
			$this,
			5,
			'/var/www/sites/Nette/projekt1/temp/cache/nette.application/touch'
		));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceAuthenticator(): App\Model\UserManager
	{
		return new App\Model\UserManager($this->getService('database.default.context'), $this->getService('security.passwords'));
	}


	public function createServiceCache__storage(): Nette\Caching\Storage
	{
		return new Nette\Caching\Storages\FileStorage('/var/www/sites/Nette/projekt1/temp/cache');
	}


	public function createServiceContainer(): Container_0d26a4f28b
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=offline_zabava02', 'root', 'Bl10_10Ji', ['lazy' => true]);
		Nette\Database\Helpers::initializeTracy(
			$service,
			true,
			'default',
			true,
			$this->getService('tracy.bar'),
			$this->getService('tracy.blueScreen')
		);
		return $service;
	}


	public function createServiceDatabase__default__context(): Nette\Database\Explorer
	{
		return new Nette\Database\Explorer(
			$this->getService('database.default.connection'),
			$this->getService('database.default.structure'),
			$this->getService('database.default.conventions'),
			$this->getService('cache.storage')
		);
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		return new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		return new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
	}


	public function createServiceForms__factory(): Nette\Forms\FormFactory
	{
		return new Nette\Forms\FormFactory($this->getService('http.request'));
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			private $container;


			public function __construct(Container_0d26a4f28b $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/var/www/sites/Nette/projekt1/temp/cache/latte');
				$service->setAutoRefresh();
				$service->setContentType('html');
				Nette\Utils\Html::$xhtml = false;
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Bridges\ApplicationLatte\TemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage')
		);
		Nette\Bridges\ApplicationDI\LatteExtension::initLattePanel($service, $this->getService('tracy.bar'));
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServiceRouter(): Nette\Application\Routers\RouteList
	{
		return App\Router\RouterFactory::createRouter();
	}


	public function createServiceSecurity__authorizator(): Nette\Security\Authorizator
	{
		$service = new Nette\Security\Permission;
		$service->addRole('guest', null);
		$service->addRole('member', ['guest']);
		$service->addRole('admin', null);
		$service->addResource('Error');
		$service->allow('admin');
		$service->allow('guest', 'Error');
		$service->addResource('Administration');
		$service->addResource('Games');
		$service->addResource('Contact');
		$service->allow('guest', 'Administration', 'login');
		$service->allow('guest', 'Administration', 'register');
		$service->allow('guest', 'Games', 'default');
		$service->allow('guest', 'Games', 'list');
		$service->allow('guest', 'Games', 'show');
		$service->allow('guest', 'Contact');
		$service->allow('member', 'Administration', 'default');
		$service->allow('member', 'Administration', 'logout');
		return $service;
	}


	public function createServiceSecurity__legacyUserStorage(): Nette\Security\IUserStorage
	{
		return new Nette\Http\UserStorage($this->getService('session.session'));
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User(
			$this->getService('security.legacyUserStorage'),
			$this->getService('authenticator'),
			$this->getService('security.authorizator'),
			$this->getService('security.userStorage')
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		$service->setOptions(['cookieSamesite' => 'Lax']);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function initialize()
	{
		// di.
		(function () {
			$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		})();
		// forms.
		(function () {
			Nette\Forms\Validator::$messages[Nette\Forms\Form::REQUIRED] = 'Povinné pole.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::EMAIL] = 'Neplatná emailová adresa.';
		})();
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			Nette\Http\Helpers::initCookie($this->getService('http.request'), $response);
		})();
		// session.
		(function () {
			$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		})();
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			Tracy\Debugger::getLogger()->mailer = [new Tracy\Bridges\Nette\MailSender($this->getService('mail.mailer')), 'send'];
			$this->getService('session.session')->start();
			Tracy\Debugger::dispatch();
		})();
	}
}
