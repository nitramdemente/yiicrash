<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accidente".
 *
 * @property integer $id
 * @property integer $fecha_reg
 * @property integer $fecha_acc
 * @property string $clima
 * @property string $factor_riesgo
 * @property string $severidad
 * @property string $latitud
 * @property string $longitud
 * @property string $seguro
 */
class Accidente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accidente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_reg', 'fecha_acc', 'latitud', 'longitud', 'seguro'], 'required'],
            [['fecha_reg', 'fecha_acc'], 'integer'],
            [['clima', 'factor_riesgo', 'severidad', 'latitud', 'longitud', 'seguro'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fecha_reg' => 'Fecha Reg',
            'fecha_acc' => 'Fecha Acc',
            'clima' => 'Clima',
            'factor_riesgo' => 'Factor Riesgo',
            'severidad' => 'Severidad',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'seguro' => 'Seguro',
        ];
    }
}
