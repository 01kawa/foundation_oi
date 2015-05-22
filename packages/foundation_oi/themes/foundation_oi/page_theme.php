<?php
namespace Concrete\Package\FoundationOi\Theme\FoundationOi;
use Concrete\Core\Page\Theme\Theme; 

defined('C5_EXECUTE') or die(_("Access Denied."));

class PageTheme extends Theme
{
	public function getThemeDescription()
	{
		return t("Foundation for conrerete5");
	}

	public function getThemeName()
	{
		return t("Foundation Grid Theme");
	}
	protected $pThemeGridFrameworkHandle = 'foundation';
}