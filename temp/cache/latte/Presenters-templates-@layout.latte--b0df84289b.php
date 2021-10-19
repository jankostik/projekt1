<?php

use Latte\Runtime as LR;

/** source: /var/www/sites/Nette/projekt1/app/Presenters/templates/@layout.latte */
final class Templateb0df84289b extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['head' => 'blockHead', 'scripts' => 'blockScripts'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>';
		if ($this->hasBlock("title")) /* line 13 */ {
			$this->renderBlock($ʟ_nm = 'title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('striphtml', $ʟ_fi, $s));
			}) /* line 13 */;
			echo ' | ';
		}
		echo 'Nette Sandbox</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 17 */;
		echo '/css/style.css">
	';
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('head', get_defined_vars()) /* line 18 */;
		echo '
</head>

<body>
	<header>
	<nav class="navbar">
		<div class="max-width">
		<div class="logo">
          <a href="#">
            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 27 */;
		echo '/css/images/Ellipse 1.png" alt="logo">
            Logo</a
          >
        </div>
			<ul class="menu">
				<li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Games:default")) /* line 32 */;
		echo '">Úvod</a></li>
				<div class="dropdown">
					<button class="dropbtn">Kategorie</button>
					<div class="dropdown-content">
';
		$iterations = 0;
		foreach ($menu as $item) /* line 36 */ {
			echo '						<li>
							<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Games:list", [$item->category_url])) /* line 37 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($item->category_title) /* line 37 */;
			echo '</a>
';
			if ($user->isInRole('admin')) /* line 38 */ {
				echo '							<a class="editC" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Administration:editC", [$item->category_url])) /* line 39 */;
				echo '"> - upravit kategorii</a>
';
			}
			echo '						</li>
';
			$iterations++;
		}
		echo '					</div>
				</div>
				<li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Contact:default")) /* line 44 */;
		echo '">Kontakt</a></li>
				<li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Administration:default")) /* line 45 */;
		echo '">Administrace</a></li>
			</ul>
		</div>
	</nav>
	</header>
	
';
		$iterations = 0;
		foreach ($flashes as $flash) /* line 51 */ {
			echo '		<div';
			echo ($ʟ_tmp = array_filter(['alert', 'alert-' . $flash->type])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 51 */;
			echo '>';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 51 */;
			echo '</div>
';
			$iterations++;
		}
		echo '		<div class="max-width">
';
		$this->renderBlock($ʟ_nm = 'content', [], 'html') /* line 53 */;
		echo '		</div>
	

';
		$this->renderBlock('scripts', get_defined_vars()) /* line 57 */;
		echo '
</body>
</html>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['item' => '36', 'flash' => '51'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block head} on line 18 */
	public function blockHead(array $ʟ_args): void
	{
		
	}


	/** {block scripts} on line 57 */
	public function blockScripts(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://nette.github.io/resources/js/3/netteForms.min.js"></script>
	<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 60 */;
		echo '/js/main.js"></script>
';
	}

}
