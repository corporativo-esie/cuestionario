<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aniogeneracion".
 *
 * @property int $ID
 * @property string $gen_anio
 *
 * @property Cuestionario[] $cuestionarios
 */
class Aniogeneracion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aniogeneracion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gen_anio'], 'required'],
            [['gen_anio'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'gen_anio' => 'Gen Anio',
        ];
    }

    /**
     * Gets query for [[Cuestionarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCuestionarios()
    {
        return $this->hasMany(Cuestionario::class, ['cues_fkGenAnio' => 'ID']);
    }
}
