<?php

use Latte\Runtime as LR;

/** source: /var/www/sites/projekt1/app/Presenters/templates/Games/show.latte */
final class Templatead77a0e0d9 extends Latte\Runtime\Template
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
		echo LR\Filters::escapeHtmlText($game->game_title) /* line 2 */;
		echo '
<br>
';
		echo LR\Filters::escapeHtmlText($game->game_content) /* line 4 */;
		echo '
<br>
<strong>';
		echo LR\Filters::escapeHtmlText($game->game_description) /* line 6 */;
		echo '</strong>
';
	}

}
