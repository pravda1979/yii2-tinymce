<?php

namespace pravda1979\tinymce;

/**
 * TinyMCE Extension for Yii2
 */
use yii\widgets\InputWidget;
use yii\helpers\Html;
use yii\helpers\Json;

class TinyMCE extends InputWidget
{
    public $clientOptions = [];
    public $language;

    /**
     * Регистрируем assets, инициализируем TinyMCE editor
     */
    protected function registerClientScript()
    {
        $js = [];
        $view = $this->getView();

        Asset::register($view);

        if (!empty($this->language) && $this->language !== 'en') {
            $languageAssetBundle = LanguageAsset::register($view);
            $languageFile = "langs/{$this->language}.js";
            $languageAssetBundle->js[] = $languageFile;
            $this->clientOptions['language'] = $this->language;
        }

        $id = $this->options['id'];

        $this->clientOptions['selector'] = "#$id";
        $options = Json::encode($this->clientOptions);

        $js[] = "tinymce.init($options);";
        $view->registerJs(implode("\n", $js));
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->name, $this->value, $this->options);
        }
        $this->registerClientScript();
    }
}
