<?php

use Latte\Runtime as LR;

/** source: /var/www/sites/Nette/projekt1/app/Presenters/templates/Administration/default.latte */
final class Template8e0fc4589d extends Latte\Runtime\Template
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
		echo 'Administrace webu';
	}


	/** {block description} on line 2 */
	public function blockDescription(array $ʟ_args): void
	{
		echo 'Administrace webu.';
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '<div class="content">
    <div class="container">
        <h1>Vítejte v administraci! Jste přihlášeni jako <b>';
		echo LR\Filters::escapeHtmlText($username) /* line 6 */;
		echo '</b>.</h1>

        
';
		if ($user->isInRole('admin')) /* line 9 */ {
			if (!$user->isInRole('admin')) /* line 10 */ {
				echo '		<p>Nemáte administrátorská oprávnění, požádejte administrátora webu, aby vám je přidělil.</p>
';
			}
			echo '        <a class="admin" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Games:new")) /* line 11 */;
			echo '">přidat novou hru</a>
        <a class="admin" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Administration:newC")) /* line 12 */;
			echo '">přidat novou kategorii</a>
';
		}
		echo '

';
		if ($user->isInRole('member')) /* line 16 */ {
			echo '		
        <p>Zatím pro vás bohužel nemám připravené žádné užitečné funkce...<br>
        <p>Ale když najdete tajný odkaz, tak se Vám změní role na admin <br>
        Odkaz lze najít na jakékoli stránce</p>
';
		}
		echo '
        <h2><a class="admin" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("logout")) /* line 23 */;
		echo '">Odhlásit</a></h2>
    </div>
</div>';
	}

}
