<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "foto".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $id_accidente
 */
class Foto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'id_accidente'], 'required'],
            [['id_accidente'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'id_accidente' => 'Id Accidente',
        ];
    }
}
