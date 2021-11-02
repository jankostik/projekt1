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
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['game' => '25'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '<div class="content">
';
		if ($user->isInRole('member')) /* line 5 */ {
			echo '		<a class="tajny" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Administration:changeRole")) /* line 6 */;
			echo '">Tajný odkaz</a>
';
		}
		echo '    <h1>Nejlepší hry:</h1>
    <div class="container">
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
            <h1>Všechny hry:</h1>
            </p>
';
		$iterations = 0;
		foreach ($games as $game) /* line 25 */ {
			echo '            <ul>
			<li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Games:show", [$game->game_url, $game->category_id])) /* line 26 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($game->game_title) /* line 26 */;
			echo '</a></li>
			<div class="line"></div>
			<li><strong class="description">';
			echo LR\Filters::escapeHtmlText($game->game_description) /* line 28 */;
			echo '</strong></li>
';
			if ($user->isInRole('admin')) /* line 29 */ {
				echo '			<div class="edit-tags">
				<a class="edit" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Games:edit", [$game->game_url])) /* line 31 */;
				echo '">Upravit hru</a>
				<a class="edit" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("remove", [$game->game_url, $game->category_id])) /* line 32 */;
				echo '">Odstranit</a>
			</div>
';
			}
			echo '		</ul>
';
			$iterations++;
		}
		if ($user->isInRole('admin')) /* line 36 */ {
			echo '		<a class="edit" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Games:new")) /* line 37 */;
			echo '">Vytvořit novou hru</a>
';
		}
		echo '		<br>
    </div>
</div>';
	}

}
