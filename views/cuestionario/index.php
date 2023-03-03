<?php

use app\models\Cuestionario;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CuestionarioSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Cuestionarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuestionario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cuestionario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'cues_apepat',
            'cues_apemat',
            'cues_nombre',
            'cues_fkGenAnio',
            //'cues_numeroTelefonico',
            //'cues_correo',
            //'cues_titulo',
            //'cues_anioTitulo',
            //'cues_razon',
            //'cues_estudioAdicional',
            //'cues_tipoEstudio',
            //'cues_nombreInstituto',
            //'cues_conclusionEstudio',
            //'cues_certificado',
            //'cues_interesEstudio',
            //'cues_temaEstudio',
            //'cues_prioridadInteres',
            //'cues_trabajo',
            //'cues_tiempoEmpleo',
            //'cues_nombreEmpresa',
            //'cues_domicilioEmpresa',
            //'cues_telefonoEmpresa',
            //'cues_correoEmpresa',
            //'cues_regimen',
            //'cues_tipoTrabajo',
            //'cues_examen',
            //'cues_posicionPre',
            //'cues_puestaPractica',
            //'cues_ideaPropia',
            //'cues_reconocimiento',
            //'cues_posibilidad',
            //'cues_desarrolloEquipo',
            //'cues_sectorEconomico',
            //'cues_trabajoEconomico',
            //'cues_iniciativaEmpresarial',
            //'cues_desicionProfesional',
            //'cues_resolucionProblema',
            //'cues_desarolloProyecto',
            //'cues_interaccion',
            //'cues_diagnostico',
            //'cues_fomento',
            //'cues_eleccion',
            //'cues_carreraCurso',
            //'cues_sugerencia:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Cuestionario $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
