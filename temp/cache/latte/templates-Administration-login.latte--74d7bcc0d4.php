<?php

use Latte\Runtime as LR;

/** source: /var/www/sites/Nette/projekt1/app/Presenters/templates/Administration/login.latte */
final class Template74d7bcc0d4 extends Latte\Runtime\Template
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
		echo 'Přihlášení';
	}


	/** {block description} on line 2 */
	public function blockDescription(array $ʟ_args): void
	{
		echo 'Přihlášení do uživatelského účtu.';
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '<div class="content">
';
		/* line 6 */ $_tmp = $this->global->uiControl->getComponent("loginForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '    <p>Pokud ještě nemáte účet, <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("register")) /* line 7 */;
		echo '">zaregistrujte se</a>.</p>
</div>';
	}

}
