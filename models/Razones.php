<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "razones".
 *
 * @property int $ID
 * @property string $opciones
 *
 * @property Cuestionario[] $cuestionarios
 */
class Razones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'razones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['opciones'], 'required'],
            [['opciones'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'opciones' => 'Opciones',
        ];
    }

    /**
     * Gets query for [[Cuestionarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCuestionarios()
    {
        return $this->hasMany(Cuestionario::class, ['cues_fkRazon' => 'ID']);
    }
}
