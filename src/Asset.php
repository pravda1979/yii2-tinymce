<?php

namespace pravda1979\tinymce;

/**
 * Asset for TinyMCE extension
 */

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    public $sourcePath = '@vendor/tinymce/tinymce'; // Путь к пакету
    public $js = [
        'tinymce.js'
    ];
}
