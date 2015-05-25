<?php
namespace Concrete\Package\FoundationOi\Src;
 
use Concrete\Core\Page\Theme\GridFramework\GridFramework;
 
defined('C5_EXECUTE') or die(_("Access Denied."));
 
class FoundationGridFramework extends GridFramework
{

	public function getPageThemeGridFrameworkName()
	{
	    return t('Foundation');
	}
	 
	public function getPageThemeGridFrameworkRowStartHTML()
	{
	    return '<div class="row">';
	}
	 
	public function getPageThemeGridFrameworkRowEndHTML()
	{
	    return '</div>';
	}
	 
	public function getPageThemeGridFrameworkContainerStartHTML()
	{
	    return '';
	}
	 
	public function getPageThemeGridFrameworkContainerEndHTML()
	{
	    return '';
	}
	 
	public function getPageThemeGridFrameworkColumnClasses()
	{
	    $columns = array(
	        'large-1 small-12',
	        'large-2  small-12',
	        'large-3  small-12',
	        'large-4  small-12',
	        'large-5  small-12',
	        'large-6  small-12',
	        'large-7  small-12',
	        'large-8  small-12',
	        'large-9  small-12',
	        'large-10  small-12',
	        'large-11  small-12',
	        'large-12  small-12',
	    );
	    return $columns;
	}
	 
	public function getPageThemeGridFrameworkColumnOffsetClasses()
	{
	    $offsets = array(
	        'small-offset-1',
	        'small-offset-2',
	        'small-offset-3',
	        'small-offset-4',
	        'small-offset-5',
	        'small-offset-6',
	        'small-offset-7',
	        'small-offset-8',
	        'small-offset-9',
	        'small-offset-10',
	        'small-offset-11',
	        'small-offset-12',
	    );
	    return $offsets;
	}
	 
	public function getPageThemeGridFrameworkColumnAdditionalClasses()
	{
	    return 'columns';
	}
	 
	public function getPageThemeGridFrameworkColumnOffsetAdditionalClasses()
	{
	    return 'columns';
	}

}
