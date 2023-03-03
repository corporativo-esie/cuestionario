<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Aniogeneracion $model */

$this->title = 'Update Aniogeneracion: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Aniogeneracions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aniogeneracion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
