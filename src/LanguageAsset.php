<?php

namespace pravda1979\tinymce;

/**
 * Asset for TinyMCE extension
 */

use yii\web\AssetBundle;

class LanguageAsset extends AssetBundle
{
    public $sourcePath = '@vendor/pravda1979/yii2-tinymce/src/assets'; // Путь к пакету
    public $depends = [
        'pravda1979\tinymce\Asset'
    ];
}
