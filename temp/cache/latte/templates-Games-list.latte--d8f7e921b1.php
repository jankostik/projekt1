<?php

use Latte\Runtime as LR;

/** source: /var/www/sites/projekt1/app/Presenters/templates/Games/list.latte */
final class Templated8f7e921b1 extends Latte\Runtime\Template
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
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['game' => '2'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$iterations = 0;
		foreach ($gamesList as $game) /* line 2 */ {
			echo '<ul>
	<li><a href="#">';
			echo LR\Filters::escapeHtmlText($game->game_title) /* line 3 */;
			echo '</a></li>
</ul>
';
			$iterations++;
		}
		
	}

}
