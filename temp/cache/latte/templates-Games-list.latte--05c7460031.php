<?php

use Latte\Runtime as LR;

/** source: /var/www/sites/Nette/projekt1/app/Presenters/templates/Games/list.latte */
final class Template05c7460031 extends Latte\Runtime\Template
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
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['game' => '3'], $this->params) as $ʟ_v => $ʟ_l) {
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
		echo '<div class="content">
';
		$iterations = 0;
		foreach ($gamesList as $game) /* line 3 */ {
			echo '	<ul>
		<li><a class="list" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Games:show", [$game->game_url])) /* line 4 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($game->game_title) /* line 4 */;
			echo '</a></li>
		<div class="line"></div>
		<li><strong>';
			echo LR\Filters::escapeHtmlText($game->game_description) /* line 6 */;
			echo '</strong></li>
';
			if ($user->isInRole('admin')) /* line 7 */ {
				echo '		<a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Games:edit", [$game->game_url])) /* line 8 */;
				echo '">upravit hru</a>
';
			}
			echo '	</ul>
';
			$iterations++;
		}
		if ($user->isInRole('admin')) /* line 11 */ {
			echo '	<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Games:new")) /* line 12 */;
			echo '">vytvořit novou hru</a>
';
		}
		echo '	<br>
	<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Games:default")) /* line 15 */;
		echo '">zpět</a>
</div>
';
	}

}
