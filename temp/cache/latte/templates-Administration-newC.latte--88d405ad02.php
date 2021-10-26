<?php

use Latte\Runtime as LR;

/** source: /var/www/sites/Nette/projekt1/app/Presenters/templates/Administration/newC.latte */
final class Template88d405ad02 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
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
    <strong>Jste si jistí jestli je nutné vytvořit kategorii a nezařadit hru do jiné kategorie?<br>
    Ještě není hotová funkce na mazání kategorií, která kategorii vymaže a zároveň zachová hry.</strong>
    <h1>Vytvoření nové kategorie:</h1>
';
		/* line 7 */ $_tmp = $this->global->uiControl->getComponent("categoryForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '</div>
';
	}

}
