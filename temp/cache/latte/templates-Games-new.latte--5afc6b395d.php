<?php

use Latte\Runtime as LR;

/** source: /var/www/sites/Nette/projekt1/app/Presenters/templates/Games/new.latte */
final class Template5afc6b395d extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '{';
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		echo '}';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '<div class="content">
<h1>Vytvoření nové hry:</h1>
';
		/* line 4 */ $_tmp = $this->global->uiControl->getComponent("gameForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '</div>
';
	}

}
