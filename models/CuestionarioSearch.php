<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cuestionario;

/**
 * CuestionarioSearch represents the model behind the search form of `app\models\Cuestionario`.
 */
class CuestionarioSearch extends Cuestionario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'cues_fkGenAnio'], 'integer'],
            [['cues_apepat', 'cues_apemat', 'cues_nombre', 'cues_numeroTelefonico', 'cues_correo', 'cues_titulo', 'cues_anioTitulo', 'cues_razon', 'cues_estudioAdicional', 'cues_tipoEstudio', 'cues_nombreInstituto', 'cues_conclusionEstudio', 'cues_certificado', 'cues_interesEstudio', 'cues_temaEstudio', 'cues_prioridadInteres', 'cues_trabajo', 'cues_tiempoEmpleo', 'cues_nombreEmpresa', 'cues_domicilioEmpresa', 'cues_telefonoEmpresa', 'cues_correoEmpresa', 'cues_regimen', 'cues_tipoTrabajo', 'cues_examen', 'cues_posicionPre', 'cues_puestaPractica', 'cues_ideaPropia', 'cues_reconocimiento', 'cues_posibilidad', 'cues_desarrolloEquipo', 'cues_sectorEconomico', 'cues_trabajoEconomico', 'cues_iniciativaEmpresarial', 'cues_desicionProfesional', 'cues_resolucionProblema', 'cues_desarolloProyecto', 'cues_interaccion', 'cues_diagnostico', 'cues_fomento', 'cues_eleccion', 'cues_carreraCurso', 'cues_sugerencia'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Cuestionario::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'cues_fkGenAnio' => $this->cues_fkGenAnio,
        ]);

        $query->andFilterWhere(['like', 'cues_apepat', $this->cues_apepat])
            ->andFilterWhere(['like', 'cues_apemat', $this->cues_apemat])
            ->andFilterWhere(['like', 'cues_nombre', $this->cues_nombre])
            ->andFilterWhere(['like', 'cues_numeroTelefonico', $this->cues_numeroTelefonico])
            ->andFilterWhere(['like', 'cues_correo', $this->cues_correo])
            ->andFilterWhere(['like', 'cues_titulo', $this->cues_titulo])
            ->andFilterWhere(['like', 'cues_anioTitulo', $this->cues_anioTitulo])
            ->andFilterWhere(['like', 'cues_razon', $this->cues_razon])
            ->andFilterWhere(['like', 'cues_estudioAdicional', $this->cues_estudioAdicional])
            ->andFilterWhere(['like', 'cues_tipoEstudio', $this->cues_tipoEstudio])
            ->andFilterWhere(['like', 'cues_nombreInstituto', $this->cues_nombreInstituto])
            ->andFilterWhere(['like', 'cues_conclusionEstudio', $this->cues_conclusionEstudio])
            ->andFilterWhere(['like', 'cues_certificado', $this->cues_certificado])
            ->andFilterWhere(['like', 'cues_interesEstudio', $this->cues_interesEstudio])
            ->andFilterWhere(['like', 'cues_temaEstudio', $this->cues_temaEstudio])
            ->andFilterWhere(['like', 'cues_prioridadInteres', $this->cues_prioridadInteres])
            ->andFilterWhere(['like', 'cues_trabajo', $this->cues_trabajo])
            ->andFilterWhere(['like', 'cues_tiempoEmpleo', $this->cues_tiempoEmpleo])
            ->andFilterWhere(['like', 'cues_nombreEmpresa', $this->cues_nombreEmpresa])
            ->andFilterWhere(['like', 'cues_domicilioEmpresa', $this->cues_domicilioEmpresa])
            ->andFilterWhere(['like', 'cues_telefonoEmpresa', $this->cues_telefonoEmpresa])
            ->andFilterWhere(['like', 'cues_correoEmpresa', $this->cues_correoEmpresa])
            ->andFilterWhere(['like', 'cues_regimen', $this->cues_regimen])
            ->andFilterWhere(['like', 'cues_tipoTrabajo', $this->cues_tipoTrabajo])
            ->andFilterWhere(['like', 'cues_examen', $this->cues_examen])
            ->andFilterWhere(['like', 'cues_posicionPre', $this->cues_posicionPre])
            ->andFilterWhere(['like', 'cues_puestaPractica', $this->cues_puestaPractica])
            ->andFilterWhere(['like', 'cues_ideaPropia', $this->cues_ideaPropia])
            ->andFilterWhere(['like', 'cues_reconocimiento', $this->cues_reconocimiento])
            ->andFilterWhere(['like', 'cues_posibilidad', $this->cues_posibilidad])
            ->andFilterWhere(['like', 'cues_desarrolloEquipo', $this->cues_desarrolloEquipo])
            ->andFilterWhere(['like', 'cues_sectorEconomico', $this->cues_sectorEconomico])
            ->andFilterWhere(['like', 'cues_trabajoEconomico', $this->cues_trabajoEconomico])
            ->andFilterWhere(['like', 'cues_iniciativaEmpresarial', $this->cues_iniciativaEmpresarial])
            ->andFilterWhere(['like', 'cues_desicionProfesional', $this->cues_desicionProfesional])
            ->andFilterWhere(['like', 'cues_resolucionProblema', $this->cues_resolucionProblema])
            ->andFilterWhere(['like', 'cues_desarolloProyecto', $this->cues_desarolloProyecto])
            ->andFilterWhere(['like', 'cues_interaccion', $this->cues_interaccion])
            ->andFilterWhere(['like', 'cues_diagnostico', $this->cues_diagnostico])
            ->andFilterWhere(['like', 'cues_fomento', $this->cues_fomento])
            ->andFilterWhere(['like', 'cues_eleccion', $this->cues_eleccion])
            ->andFilterWhere(['like', 'cues_carreraCurso', $this->cues_carreraCurso])
            ->andFilterWhere(['like', 'cues_sugerencia', $this->cues_sugerencia]);

        return $dataProvider;
    }
}
