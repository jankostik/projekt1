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
			foreach (array_intersect_key(['game' => '5'], $this->params) as $ʟ_v => $ʟ_l) {
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
	<h1>';
		echo LR\Filters::escapeHtmlText($category_title) /* line 3 */;
		echo ':</h1>
	<div class="container">
';
		$iterations = 0;
		foreach ($gamesList as $game) /* line 5 */ {
			echo '		<ul>
			<li><a class="list" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Games:show", [$game->game_url])) /* line 6 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($game->game_title) /* line 6 */;
			echo '</a></li>
			<div class="line"></div>
			<li><strong>';
			echo LR\Filters::escapeHtmlText($game->game_description) /* line 8 */;
			echo '</strong></li>
';
			if ($user->isInRole('admin')) /* line 9 */ {
				echo '			<a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Games:edit", [$game->game_url])) /* line 10 */;
				echo '">upravit hru</a>
			<a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("remove", [$game->game_url, $game->category_id])) /* line 11 */;
				echo '">Odstranit</a>
';
			}
			echo '		</ul>
';
			$iterations++;
		}
		if ($user->isInRole('admin')) /* line 14 */ {
			echo '		<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Games:new")) /* line 15 */;
			echo '">vytvořit novou hru</a>
';
		}
		echo '		<br>
	</div>
	<a class="zpet" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Games:default")) /* line 19 */;
		echo '">zpět</a>
</div>
';
	}

}
