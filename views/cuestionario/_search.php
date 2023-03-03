<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CuestionarioSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cuestionario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'cues_apepat') ?>

    <?= $form->field($model, 'cues_apemat') ?>

    <?= $form->field($model, 'cues_nombre') ?>

    <?= $form->field($model, 'cues_fkGenAnio') ?>

    <?php // echo $form->field($model, 'cues_numeroTelefonico') ?>

    <?php // echo $form->field($model, 'cues_correo') ?>

    <?php // echo $form->field($model, 'cues_titulo') ?>

    <?php // echo $form->field($model, 'cues_anioTitulo') ?>

    <?php // echo $form->field($model, 'cues_razon') ?>

    <?php // echo $form->field($model, 'cues_estudioAdicional') ?>

    <?php // echo $form->field($model, 'cues_tipoEstudio') ?>

    <?php // echo $form->field($model, 'cues_nombreInstituto') ?>

    <?php // echo $form->field($model, 'cues_conclusionEstudio') ?>

    <?php // echo $form->field($model, 'cues_certificado') ?>

    <?php // echo $form->field($model, 'cues_interesEstudio') ?>

    <?php // echo $form->field($model, 'cues_temaEstudio') ?>

    <?php // echo $form->field($model, 'cues_prioridadInteres') ?>

    <?php // echo $form->field($model, 'cues_trabajo') ?>

    <?php // echo $form->field($model, 'cues_tiempoEmpleo') ?>

    <?php // echo $form->field($model, 'cues_nombreEmpresa') ?>

    <?php // echo $form->field($model, 'cues_domicilioEmpresa') ?>

    <?php // echo $form->field($model, 'cues_telefonoEmpresa') ?>

    <?php // echo $form->field($model, 'cues_correoEmpresa') ?>

    <?php // echo $form->field($model, 'cues_regimen') ?>

    <?php // echo $form->field($model, 'cues_tipoTrabajo') ?>

    <?php // echo $form->field($model, 'cues_examen') ?>

    <?php // echo $form->field($model, 'cues_posicionPre') ?>

    <?php // echo $form->field($model, 'cues_puestaPractica') ?>

    <?php // echo $form->field($model, 'cues_ideaPropia') ?>

    <?php // echo $form->field($model, 'cues_reconocimiento') ?>

    <?php // echo $form->field($model, 'cues_posibilidad') ?>

    <?php // echo $form->field($model, 'cues_desarrolloEquipo') ?>

    <?php // echo $form->field($model, 'cues_sectorEconomico') ?>

    <?php // echo $form->field($model, 'cues_trabajoEconomico') ?>

    <?php // echo $form->field($model, 'cues_iniciativaEmpresarial') ?>

    <?php // echo $form->field($model, 'cues_desicionProfesional') ?>

    <?php // echo $form->field($model, 'cues_resolucionProblema') ?>

    <?php // echo $form->field($model, 'cues_desarolloProyecto') ?>

    <?php // echo $form->field($model, 'cues_interaccion') ?>

    <?php // echo $form->field($model, 'cues_diagnostico') ?>

    <?php // echo $form->field($model, 'cues_fomento') ?>

    <?php // echo $form->field($model, 'cues_eleccion') ?>

    <?php // echo $form->field($model, 'cues_carreraCurso') ?>

    <?php // echo $form->field($model, 'cues_sugerencia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
