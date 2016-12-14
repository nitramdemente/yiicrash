<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Accidente;

/**
 * AccidenteSearch represents the model behind the search form about `app\models\Accidente`.
 */
class AccidenteSearch extends Accidente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'fecha_reg', 'fecha_acc'], 'integer'],
            [['clima', 'factor_riesgo', 'severidad', 'latitud', 'longitud', 'seguro'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Accidente::find();

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
            'id' => $this->id,
            'fecha_reg' => $this->fecha_reg,
            'fecha_acc' => $this->fecha_acc,
        ]);

        $query->andFilterWhere(['like', 'clima', $this->clima])
            ->andFilterWhere(['like', 'factor_riesgo', $this->factor_riesgo])
            ->andFilterWhere(['like', 'severidad', $this->severidad])
            ->andFilterWhere(['like', 'latitud', $this->latitud])
            ->andFilterWhere(['like', 'longitud', $this->longitud])
            ->andFilterWhere(['like', 'seguro', $this->seguro]);

        return $dataProvider;
    }
}
