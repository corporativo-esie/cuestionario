<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cuestionario $model */

$this->title = 'Create Cuestionario';
$this->params['breadcrumbs'][] = ['label' => 'Cuestionarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuestionario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'genAnio' => $genAnio,
    ]) ?>

</div>
