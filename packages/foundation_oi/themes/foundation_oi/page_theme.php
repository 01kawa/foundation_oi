<?php
namespace Concrete\Package\FoundationOi\Theme\FoundationOi;
use Concrete\Core\Page\Theme\Theme; 

defined('C5_EXECUTE') or die(_("Access Denied."));

class PageTheme extends Theme
{
	public function getThemeDescription()
	{
		return t("Theme Description here");
	}

	public function getThemeName()
	{
		return t("Theme Name here");
	}
	protected $pThemeGridFrameworkHandle = 'foundation';
}