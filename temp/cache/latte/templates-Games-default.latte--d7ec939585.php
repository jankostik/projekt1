<?php

use Latte\Runtime as LR;

/** source: /var/www/sites/Nette/projekt1/app/Presenters/templates/Games/default.latte */
final class Templated7ec939585 extends Latte\Runtime\Template
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
		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		echo '<div class="uvod">
    <h1>Nejlepší hry:</h1>
    <p>
    Zatím se připravuje ...
    <br>
    <br>
    Jinak vše v menu je  funkční. Co se týče nejlepších her,
    tak musím udělat hodnocení her.
    A poté nejlepší hry zobrazím zde. Všechno ostatní co je napsané v php je  funkční.
<br>
<br>
    - zobrazení her<br>
    - asministrace her<br>
    - přihlášení/registrace<br>
    - kontakt<br>
    </p>
</div>';
	}

}
