<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuestionario".
 *
 * @property int $ID
 * @property string|null $cues_apepat
 * @property string|null $cues_apemat
 * @property string|null $cues_nombre
 * @property int|null $cues_fkGenAnio
 * @property string|null $cues_numeroTelefonico
 * @property string|null $cues_correo
 * @property string|null $cues_titulo
 * @property string|null $cues_anioTitulo
 * @property string|null $cues_razon
 * @property string|null $cues_estudioAdicional
 * @property string|null $cues_tipoEstudio
 * @property string|null $cues_nombreInstituto
 * @property string|null $cues_conclusionEstudio
 * @property string|null $cues_certificado
 * @property string|null $cues_interesEstudio
 * @property string|null $cues_temaEstudio
 * @property string|null $cues_prioridadInteres
 * @property string|null $cues_trabajo
 * @property string|null $cues_tiempoEmpleo
 * @property string|null $cues_nombreEmpresa
 * @property string|null $cues_domicilioEmpresa
 * @property string|null $cues_telefonoEmpresa
 * @property string|null $cues_correoEmpresa
 * @property string|null $cues_regimen
 * @property string|null $cues_tipoTrabajo
 * @property string|null $cues_examen
 * @property string|null $cues_posicionPre
 * @property string|null $cues_puestaPractica
 * @property string|null $cues_ideaPropia
 * @property string|null $cues_reconocimiento
 * @property string|null $cues_posibilidad
 * @property string|null $cues_desarrolloEquipo
 * @property string|null $cues_sectorEconomico
 * @property string|null $cues_trabajoEconomico
 * @property string|null $cues_iniciativaEmpresarial
 * @property string|null $cues_desicionProfesional
 * @property string|null $cues_resolucionProblema
 * @property string|null $cues_desarolloProyecto
 * @property string|null $cues_interaccion
 * @property string|null $cues_diagnostico
 * @property string|null $cues_fomento
 * @property string|null $cues_eleccion
 * @property string|null $cues_carreraCurso
 * @property string|null $cues_sugerencia
 *
 * @property Aniogeneracion $cuesFkGenAnio
 */
class Cuestionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cuestionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cues_fkGenAnio'], 'integer'],
            [['cues_sugerencia'], 'string'],
            [['cues_apepat', 'cues_apemat'], 'string', 'max' => 30],
            [['cues_nombre', 'cues_correo', 'cues_nombreInstituto', 'cues_nombreEmpresa', 'cues_correoEmpresa'], 'string', 'max' => 50],
            [['cues_numeroTelefonico', 'cues_telefonoEmpresa'], 'string', 'max' => 20],
            [['cues_titulo', 'cues_estudioAdicional', 'cues_conclusionEstudio', 'cues_certificado', 'cues_interesEstudio', 'cues_trabajo', 'cues_examen', 'cues_eleccion', 'cues_carreraCurso'], 'string', 'max' => 2],
            [['cues_anioTitulo'], 'string', 'max' => 4],
            [['cues_razon'], 'string', 'max' => 100],
            [['cues_tipoEstudio', 'cues_tiempoEmpleo'], 'string', 'max' => 25],
            [['cues_temaEstudio', 'cues_prioridadInteres', 'cues_domicilioEmpresa'], 'string', 'max' => 255],
            [['cues_regimen', 'cues_tipoTrabajo'], 'string', 'max' => 15],
            [['cues_posicionPre'], 'string', 'max' => 10],
            [['cues_puestaPractica', 'cues_ideaPropia', 'cues_reconocimiento', 'cues_posibilidad', 'cues_desarrolloEquipo'], 'string', 'max' => 12],
            [['cues_sectorEconomico', 'cues_trabajoEconomico', 'cues_iniciativaEmpresarial', 'cues_desicionProfesional', 'cues_resolucionProblema', 'cues_desarolloProyecto', 'cues_interaccion', 'cues_diagnostico', 'cues_fomento'], 'string', 'max' => 5],
            [['cues_fkGenAnio'], 'exist', 'skipOnError' => true, 'targetClass' => Aniogeneracion::class, 'targetAttribute' => ['cues_fkGenAnio' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'cues_apepat' => 'Apellido Paterno:',
            'cues_apemat' => 'Apellido Materno:',
            'cues_nombre' => 'Nombre (s):',
            'cues_fkGenAnio' => 'Generación a la que pertenece:',
            'cues_numeroTelefonico' => 'Número Telefónico:',
            'cues_correo' => 'Correo electrónico:',
            'cues_titulo' => '1. ¿Está titulado?:',
            'cues_anioTitulo' => '2. Si su respuesta es Sí ¿en que año se tituló?:',
            'cues_razon' => '3. Si su respuesta es No ¿cuál es la razón?',
            'cues_estudioAdicional' => '4. ¿Una vez que concluyó su carrera realizó otros estudios?',
            'cues_tipoEstudio' => '5. Tipos de Estudios:',
            'cues_nombreInstituto' => '6. Nombre de la institución donde lo cursó:',
            'cues_conclusionEstudio' => '7. ¿Concluyó esos estudios?',
            'cues_certificado' => '8. ¿Obtuvo su certificado, diploma o grado?',
            'cues_interesEstudio' => '¿Estás interesado en estudiar alguno?',
            'cues_temaEstudio' => '10. Si tu respuesta es positiva. ¿Sobre que tema te gustaría estudiar?',
            'cues_prioridadInteres' => '11. Ordena las áreas de interés por orden prioritario:',
            'cues_trabajo' => '12. ¿Trabaja actualmente?',
            'cues_tiempoEmpleo' => '13. Señale el tiempo que le llevó conseguir un empleo relacionado con sus estudios profesionales después de haberse graduado:',
            'cues_nombreEmpresa' => 'Nombre:',
            'cues_domicilioEmpresa' => 'Domicilio:',
            'cues_telefonoEmpresa' => 'Telefono(s):',
            'cues_correoEmpresa' => 'Correo(s) electrónico(s)',
            'cues_regimen' => '15. El régimen jurídico de la institución en la que trabaja es:',
            'cues_tipoTrabajo' => '16. Trabajas por medio de:',
            'cues_examen' => '17. Presentastes examen en el USICAMM;',
            'cues_posicionPre' => '18. Que posición quedaste en la pre-relación',
            'cues_puestaPractica' => 'La puesta en práctica de los conocimientos adquiridos.',
            'cues_ideaPropia' => 'La posibilidad de realizar ideas propias.',
            'cues_reconocimiento' => 'El reconocimiento profesional alcanzado.',
            'cues_posibilidad' => 'La posibilidad de hacer algo para la sociedad',
            'cues_desarrolloEquipo' => 'Desarrollo de trabajo en equipo.',
            'cues_sectorEconomico' => 'Realizar trabajos en distintos sectores económicos.',
            'cues_trabajoEconomico' => 'Trabajar en un sector económico específico.',
            'cues_iniciativaEmpresarial' => 'Iniciativa Empresarial y/o autoempleo.',
            'cues_desicionProfesional' => 'Toma de desiciones profesionales',
            'cues_resolucionProblema' => 'Resolución de problemas laborales.',
            'cues_desarolloProyecto' => 'Desarrollar proyectos de investigación.',
            'cues_interaccion' => 'Interactuar e intervenir con personas, grupos, organizaciones y comunidades.',
            'cues_diagnostico' => 'Diagnosticar las necesidades y problemas sociales',
            'cues_fomento' => 'Fomentó el espíritu de profesionalización.',
            'cues_eleccion' => '¿Elegiría esta misma institución?',
            'cues_carreraCurso' => '¿Elegiría la misma carrera que cursó?',
            'cues_sugerencia' => 'Que sugiere para mejorar la institución en la que estudió y/o la carrera que cursó:',
        ];
    }

    /**
     * Gets query for [[CuesFkGenAnio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCuesFkGenAnio()
    {
        return $this->hasOne(Aniogeneracion::class, ['ID' => 'cues_fkGenAnio']);
    }
}
