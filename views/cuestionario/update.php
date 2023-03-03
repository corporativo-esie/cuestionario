<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cuestionario $model */

$this->title = 'Update Cuestionario: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Cuestionarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cuestionario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'genAnio' => $genAnio,
    ]) ?>

</div>
