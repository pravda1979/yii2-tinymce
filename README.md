TinyMCE Extension for Yii2
==========================

Extension for Yii2 based on [TinyMCE 5](https://www.tiny.cloud/).

Installation
------------

Preferred installation method for this extension is through [composer](http://getcomposer.org/download/).

To install TinyMCE extension run:
```
composer require pravda1979/yii2-tinymce "*"
```
or add to the require section of your application's `composer.json` file.
```
"pravda1979/yii2-tinymce": "*"
```

Demo
------
You can see demo [example](http://n66367j4.beget.tech/web/test/tinymce)

Usage
------
Use with model
```
use pravda1979\tinymce\TinyMce;

<?= $form->field($model, 'html')->widget(TinyMce::className(), [
    'options' => ['rows' => 10],
    'language' => 'ru',
    'clientOptions' => [
        'plugins' => 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern help',
        'toolbar' => 'formatselect | bold italic strikethrough forecolor backcolor formatpainter | link image media | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat | addcomment',
    ]
]);?>
```
or without model
```
use pravda1979\tinymce\TinyMce;

<?= \pravda1979\tinymce\TinyMCE::widget([
    'name' => 'test-tinymce',
    'value' => 'test TinyMCE',
    'language' => 'ru',
    'clientOptions' => [
        'plugins' => 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern help',
        'toolbar' => 'formatselect | bold italic strikethrough forecolor backcolor formatpainter | link image media | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat | addcomment',
    ]
]); ?>
```