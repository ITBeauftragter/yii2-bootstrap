<?php
namespace itbeauftragter\yii\bootstrap;
/**
 * Bootstrap Dependent Source Asset 
 *
 * @author  Daniel Lucas <daniel.lucas@neusser-schuetzenlust.de>
 * @version 5.1.1
 * @package twbs/bootstrap
 * @see     https://github.com/twbs/bootstrap
 */
class BootstrapAsset extends \yii\web\AssetBundle
{
    /**
     * Bundle with Dependent Source Package
     */
    public $sourcePath = '@vendor/twbs/bootstrap';
    
    public $css = [
        'dist/css/bootstrap.min.css',
    ];
    
    public $js = [
        'dist/js/bootstrap.min.js',
        'dist/js/bootstrap.bundle.js'
    ];
}
