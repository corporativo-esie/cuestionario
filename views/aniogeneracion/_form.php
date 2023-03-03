<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Aniogeneracion $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="aniogeneracion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gen_anio')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
