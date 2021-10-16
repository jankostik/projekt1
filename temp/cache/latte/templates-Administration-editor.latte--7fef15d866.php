<?php

use Latte\Runtime as LR;

/** source: /var/www/sites/Nette/projekt1/app/Presenters/templates/Administration/editor.latte */
final class Template7fef15d866 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent', 'scripts' => 'blockScripts'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		echo "\n";
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
		/* line 2 */ $_tmp = $this->global->uiControl->getComponent("editorForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		$this->renderBlock('scripts', get_defined_vars()) /* line 3 */;
		echo "\n";
	}


	/** {block scripts} on line 3 */
	public function blockScripts(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->renderBlockParent($ʟ_nm = 'scripts', get_defined_vars()) /* line 4 */;
		echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.5.1/tinymce.min.js" integrity="sha512-rCSG4Ab3y6N79xYzoaCqt9gMHR0T9US5O5iBuB25LtIQ1Hsv3jKjREwEMeud8q7KRgPtxhmJesa1c9pl6upZvg==" crossorigin="anonymous"></script> <script type="text/javascript">
        tinymce.init({
            selector: \'textarea[name=content]\',
            plugins: [
                \'advlist autolink lists link image charmap print preview anchor\',
                \'searchreplace visualblocks code fullscreen\',
                \'insertdatetime media table contextmenu paste\'
            ],
            toolbar: \'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image\',
            entities: \'160,nbsp\',
            entity_encoding: \'raw\'
        });
    </script>
';
	}

}
