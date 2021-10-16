<?php

use Latte\Runtime as LR;

/** source: /var/www/sites/Nette/projekt1/app/Presenters/templates/Administration/default.latte */
final class Template8e0fc4589d extends Latte\Runtime\Template
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
		echo '<li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Games:edit")) /* line 2 */;
		echo '">přidat novou hru</a></li>
<li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Administration:ceditor")) /* line 3 */;
		echo '">přidat novou kategorii</a></li>
';
	}

}
