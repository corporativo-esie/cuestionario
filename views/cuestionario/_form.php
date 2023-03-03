<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var app\models\Cuestionario $model */
/** @var yii\widgets\ActiveForm $form */
$opcionCorta = ['Si' => 'Si', 'No' => 'No']; //opciones de Sí y No
$opcionesRazones = ['a) Falta liberar el servicio social.' => 'a) Falta liberar el servicio social.',
'b) Falta liberar las prácticas o estancia profesional.' => 'b) Falta liberar las prácticas o estancia profesional.',
'c) Falta la opción de titulación.' => 'c) Falta la opción de titulación.',
'd) Falta de recursos  económicos.' => ' d) Falta de recursos económicos',
'e) Falta de tiempo está fuera de la entidad.' => 'e) Falta de tiempo está fuera de la entidad.']; //opciones de razones por la que no se tituló
$opcionesEstudios = ['a) Cursos cortos.' => 'a) Cursos Cortos.', 'b) Diplomado.' => 'b) Diplomado.',
'c) Especialización.' => 'c) Especialización.', 'd) Maestría.' => ' d) Maestría.', 
'd) Doctorado.' => ' d) Doctorado.', 'd) Otro.' => ' d) Otro.']; //opciones de estudios relaizados
$opcionesInteres = ['1) Gestión escolar y/o educativa.' => '1) Gestión escolar y/o educativa.',
'2) Estratégias Pedagógicas.' => '2) Estratégias Pedagógicas.',
'3) Ambientes de aprendizaje.' => '3) Ambientes de aprendizaje.',
'4) Evaluación de los aprendizajes.' => '4) Evaluación de los aprendizajes.', 
'5) Planeación por competencias.' => '5) Planeación por competencias.']; //opciones de los tiempos de empleo
$opcionesTiempos = ['a) Menos de 6 meses.' => 'a) Menos de 6 meses.',
'b) Entre 6 meses y 1 año.' => 'b) Entres 6 meses y 1 año.',
'c) Entre 1 y 2 años.' => 'c) Entre 1 y 2 años.',
'd) Más de 2 años.' => ' d) Más de 2 años',
'e) No encontré empleo relacionado con mis estudios, realizó una actividad distinta.' => 'e) No encontré empleo relacionado con mis estudios, realizó una actividad distinta.']; //opciones de razones
$opcionRegimen = ['a) Público' => 'a) Público', 'b) Privado' => 'b) Privado']; //opciones de régimen jurídico
$opcionesMediosEmpleos = ['Plaza' => 'Plaza', 'Contrato' => 'Contrato' , 'Federal' => 'Federal', 'Estatal' => 'Estatal']; //opciones del medio del trabajo
$opcionSatisfaccion = ['Insatisfecho' => 'Insatisfecho', 'Satisfecho' => 'Satisfecho']; //opciones de satisfaccion sobre los estudios
$opcionesCompetencias = ['Poco' => 'Poco', 'Mucho' => 'Mucho']; //opciones de medida de preparación de competencias


?>

<div class="cuestionario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo '<h2>l. Datos Personales</h2>'?>

    <?= $form->field($model, 'cues_apepat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cues_apemat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cues_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, "cues_fkGenAnio")->widget(Select2::classname(), [
        'data' => $genAnio,
        'language' => 'es',
        'options' => [
        'placeholder' => 'Seleccione su respuesta',
        'id' => 'cues_fkGenAnio',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_numeroTelefonico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cues_correo')->textInput(['maxlength' => true]) ?>

    <?php echo '<h2>ll. Conclusión de estudios</h2>';?>

    <?= $form->field($model, 'cues_titulo')->widget(Select2::classname(), [
        'data' => $opcionCorta,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_titulo',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_anioTitulo')->textInput() ?>

    <?= $form->field($model, 'cues_razon')->widget(Select2::classname(), [
        //'name' => 'kv_theme_bootstrap_2',
        'id' => 'cues_razon',
        'data' => $opcionesRazones,
        //'language' => 'es',
        //'hideSearch' => true,
        'theme' => Select2::THEME_BOOTSTRAP,
        'options' => [
        //'placeholder' => 'Seleccione to',
        //'id' => 'cues_razon',
        'multiple' => true, 
        //'autocomplete' => 'off'
        ],
        
        ]);?>

    <?php echo '<h2>lll. Continuación de la formación profesional</h2>';?>
    <?php echo '<p>Solo si respuesta fue Sí</p>';?>
    
    <?= $form->field($model, 'cues_estudioAdicional')->widget(Select2::classname(), [
        'data' => $opcionCorta,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_estudioAdicional',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_tipoEstudio')->widget(Select2::classname(), [
        'data' => $opcionesEstudios,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_tipoEstudio',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_nombreInstituto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cues_conclusionEstudio')->widget(Select2::classname(), [
        'data' => $opcionCorta,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_conclusionEstudio',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_certificado')->widget(Select2::classname(), [
        'data' => $opcionCorta,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_certificado',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_interesEstudio')->widget(Select2::classname(), [
        'data' => $opcionCorta,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_interesEstudio',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_temaEstudio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cues_prioridadInteres')->widget(Select2::classname(), [
        'data' => $opcionesInteres,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_prioridadInteres',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?php echo '<h2>lV. Trayectoria y ubicación en el ámbito laboral</h2>'; ?>

    <?= $form->field($model, 'cues_trabajo')->widget(Select2::classname(), [
        'data' => $opcionCorta,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_trabajo',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_tiempoEmpleo')->widget(Select2::classname(), [
        'data' => $opcionesTiempos,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_tiempoEmpleo',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>
    <?php echo '<p>14. Datos de la empresa o institución donde trabaja:</p>'; ?>
    <?= $form->field($model, 'cues_nombreEmpresa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cues_domicilioEmpresa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cues_telefonoEmpresa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cues_correoEmpresa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cues_regimen')->widget(Select2::classname(), [
        'data' => $opcionRegimen,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_regimen',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_tipoTrabajo')->widget(Select2::classname(), [
        'data' => $opcionesMediosEmpleos,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_tipoTrabajo',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_examen')->widget(Select2::classname(), [
        'data' => $opcionCorta,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_examen',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_posicionPre')->textInput(['maxlength' => true]) ?>

    <?php echo '<h2>V. Satisfaccion en relación con su desempeño profesional</h2>';?>
    <?php echo '<p>19. ¿Qué tan satisfecho está usted con los siguientes aspectos relacionados con sus estudios?</p>';?>

    <?= $form->field($model, 'cues_puestaPractica')->widget(Select2::classname(), [
        'data' => $opcionSatisfaccion,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_puestaPractica',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_ideaPropia')->widget(Select2::classname(), [
        'data' => $opcionSatisfaccion,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_ideaPropia',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_reconocimiento')->widget(Select2::classname(), [
        'data' => $opcionSatisfaccion,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_reconocimiento',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_posibilidad')->widget(Select2::classname(), [
        'data' => $opcionSatisfaccion,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_posibilidad',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_desarrolloEquipo')->widget(Select2::classname(), [
        'data' => $opcionSatisfaccion,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_desarrolloEquipo',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

        <?php echo '<h2>Vl. Opinión de los egresados sobre las formación profesional recibida</h2>'; ?>
    <?= $form->field($model, 'cues_sectorEconomico')->widget(Select2::classname(), [
        'data' => $opcionesCompetencias,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_sectorEconomico',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_trabajoEconomico')->widget(Select2::classname(), [
        'data' => $opcionesCompetencias,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_trabajoEconomico',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_iniciativaEmpresarial')->widget(Select2::classname(), [
        'data' => $opcionesCompetencias,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_iniciativaEmpresarial',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_desicionProfesional')->widget(Select2::classname(), [
        'data' => $opcionesCompetencias,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_desicionProfesional',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_resolucionProblema')->widget(Select2::classname(), [
        'data' => $opcionesCompetencias,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_resolucionProblema',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_desarolloProyecto')->widget(Select2::classname(), [
        'data' => $opcionesCompetencias,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_desarolloProyecto',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_interaccion')->widget(Select2::classname(), [
        'data' => $opcionesCompetencias,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_interaccion',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_diagnostico')->widget(Select2::classname(), [
        'data' => $opcionesCompetencias,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_diagnostico',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_fomento')->widget(Select2::classname(), [
        'data' => $opcionesCompetencias,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_fomento',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

        <?php echo '<h2>Vll. Satisfacción con la institución y la carrera que cursó</h2>'; ?>
        <?php echo '<p>Vll. ¿En qué medida de la carrera que usted cursó le preparó en las siguientes competencias?</p>'; ?>
    <?= $form->field($model, 'cues_eleccion')->widget(Select2::classname(), [
        'data' => $opcionCorta,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_eleccion',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_carreraCurso')->widget(Select2::classname(), [
        'data' => $opcionCorta,
        'language' => 'es',
        'hideSearch' => true,
        'options' => [
        'placeholder' => 'Seleccione su respuesta...',
        'id' => 'cues_carrearaCurso',
        ],
        'pluginOptions' => [
        'allowClear' => true
        ],
        ]);?>

    <?= $form->field($model, 'cues_sugerencia')->textInput(['maxlength' => true]) ?>
    <?php echo '
    <br>
    <p>La información es utilizada excusivamente con fines estadístico del Programa Insititucional de 
    Seguimiento de Egresados y para la mejora de calidad de los Programas Educativos de la Escuela Normal
    "Rosario Ma. Gutierrez Eskildsen Lic. En Educación Preeescolar"<br><br>
    ¡Gracias por su participación!
    </p>'?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
