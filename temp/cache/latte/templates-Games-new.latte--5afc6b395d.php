<?php

use Latte\Runtime as LR;

/** source: /var/www/sites/Nette/projekt1/app/Presenters/templates/Games/new.latte */
final class Template5afc6b395d extends Latte\Runtime\Template
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
		echo '
//#frm-gameForm-game_title';
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
<h1>Vytvoření nové hry:</h1>
    

';
		/* line 6 */ $_tmp = $this->global->uiControl->getComponent("gameForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '
    <script type="text/javascript">
    
    
        $(document).ready(function () {
           $("#frm-gameForm-game_title").keyup(function() {
               var query = $("#frm-gameForm-game_title").val();

               if (query.length > 2) {
                   naja.makeRequest(\'POST\', ';
		echo LR\Filters::escapeJs($this->global->uiControl->link("Games:search")) /* line 16 */;
		echo ', {
                       id:query
                   });
               }
           });
        });
    </script>

</div>
';
	}

}
