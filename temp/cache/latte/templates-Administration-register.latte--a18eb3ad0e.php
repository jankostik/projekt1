<?php

use Latte\Runtime as LR;

/** source: /var/www/sites/Nette/projekt1/app/Presenters/templates/Administration/register.latte */
final class Templatea18eb3ad0e extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['title' => 'blockTitle', 'description' => 'blockDescription', 'content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('title', get_defined_vars()) /* line 1 */;
		echo "\n";
		$this->renderBlock('description', get_defined_vars()) /* line 2 */;
		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block title} on line 1 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Registrace';
	}


	/** {block description} on line 2 */
	public function blockDescription(array $ʟ_args): void
	{
		echo 'Registrace nového uživatelského účtu.';
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		/* line 5 */ $_tmp = $this->global->uiControl->getComponent("registerForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		
	}

}
