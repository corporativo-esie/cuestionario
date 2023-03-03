<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Aniogeneracion $model */

$this->title = 'Create Aniogeneracion';
$this->params['breadcrumbs'][] = ['label' => 'Aniogeneracions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aniogeneracion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
