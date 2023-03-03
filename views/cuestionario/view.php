<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Cuestionario $model */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Cuestionarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cuestionario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'cues_apepat',
            'cues_apemat',
            'cues_nombre',
            'cues_fkGenAnio',
            'cues_numeroTelefonico',
            'cues_correo',
            'cues_titulo',
            'cues_anioTitulo',
            'cues_razon',
            'cues_estudioAdicional',
            'cues_tipoEstudio',
            'cues_nombreInstituto',
            'cues_conclusionEstudio',
            'cues_certificado',
            'cues_interesEstudio',
            'cues_temaEstudio',
            'cues_prioridadInteres',
            'cues_trabajo',
            'cues_tiempoEmpleo',
            'cues_nombreEmpresa',
            'cues_domicilioEmpresa',
            'cues_telefonoEmpresa',
            'cues_correoEmpresa',
            'cues_regimen',
            'cues_tipoTrabajo',
            'cues_examen',
            'cues_posicionPre',
            'cues_puestaPractica',
            'cues_ideaPropia',
            'cues_reconocimiento',
            'cues_posibilidad',
            'cues_desarrolloEquipo',
            'cues_sectorEconomico',
            'cues_trabajoEconomico',
            'cues_iniciativaEmpresarial',
            'cues_desicionProfesional',
            'cues_resolucionProblema',
            'cues_desarolloProyecto',
            'cues_interaccion',
            'cues_diagnostico',
            'cues_fomento',
            'cues_eleccion',
            'cues_carreraCurso',
            'cues_sugerencia:ntext',
        ],
    ]) ?>

</div>
