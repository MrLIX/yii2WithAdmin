# yii2-basic with Admin
## Composer
        "php": ">=7.2.0",
        "yiisoft/yii2": "~2.0.15",
        "yiisoft/yii2-bootstrap": "~2.0.0",
        "yiisoft/yii2-swiftmailer": "~2.0.0",
        "mdmsoft/yii2-admin": "~2.0",
        "unclead/yii2-multiple-input": "~2.0",
        "mihaildev/yii2-elfinder": "*",
        "mihaildev/yii2-ckeditor": "*",
        "trntv/yii2-file-kit": "^1.3"
        "kartik-v/yii2-widget-colorinput": "*"

# Upload Image

## Controller
// Behaviors
public function behaviors()
{
    return [
        [
            'class' => '\app\components\FileUploadBehaviour'
        ],

    ];
}
## View
<?= $form->field($model, 'path')->fileInput(['class' => 'dropify', 'data-default-file' => '/uploads/' . $model->path]) ?>
