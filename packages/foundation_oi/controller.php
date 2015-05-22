<?php
namespace Concrete\Package\FoundationOi;

use Concrete\Core\Package\Package;
use Concrete\Package\FoundationOi\Src\FoundationGridFramework;
use Core;
use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{

    protected $pkgHandle = 'foundation_oi'; //パッケージハンドル
    protected $appVersionRequired = '5.7.3'; //concrete5のバージョン
    protected $pkgVersion = '1.0'; //パッケージのバージョン

    public function getPackageDescription()
    {
        return t("Foundation theme for concrete5");  //パッケージの説明
    }

    public function getPackageName()
    {
        return t("Foundation Oi"); //パッケージ名
    }

    public function on_start()
    {
        $manager = Core::make('manager/grid_framework'); //FoundationGridFrameworkつくる
        $manager->extend('foundation', function($app) {
            return new FoundationGridFramework();
        });
    }
    
    public function install()
    {
        $pkg = parent::install();
        Theme::add('foundation_oi', $pkg); //テーマのインストール 
    }
}
