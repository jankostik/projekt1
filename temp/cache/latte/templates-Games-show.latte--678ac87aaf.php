<?php

use Latte\Runtime as LR;

/** source: /var/www/sites/Nette/projekt1/app/Presenters/templates/Games/show.latte */
final class Template678ac87aaf extends Latte\Runtime\Template
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
    <div class="container">
        <h1>';
		echo LR\Filters::escapeHtmlText($game->game_title) /* line 4 */;
		echo '</h1>
        <p class="text">';
		echo LR\Filters::escapeHtmlText($game->game_text) /* line 5 */;
		echo '</p>
        <div class="line"></div>
        <strong>';
		echo LR\Filters::escapeHtmlText($game->game_description) /* line 7 */;
		echo '</strong>
    </div>
<a class="zpet" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Games:list", [$game->category_id, $category_title])) /* line 9 */;
		echo '">zpět</a>
</div>

';
	}

}
