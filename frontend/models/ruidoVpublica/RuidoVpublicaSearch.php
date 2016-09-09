<?php

namespace frontend\models\ruidoVpublica;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ruidoVpublica\RuidoVpublica;

/**
 * RuidoVpublicaSearch represents the model behind the search form of `app\models\ruidoVpublica\RuidoVpublica`.
 */
class RuidoVpublicaSearch extends RuidoVpublica
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['fecha_solicitud', 'nombre_solicitante', 'delegacion', 'colonia', 'calle', 'numero', 'codigo_postal', 'telefono_solicitante', 'inicio_actividades', 'fin_actividades', 'horas_solicitadas', 'actividad_norte', 'actividad_sur', 'actividad_este', 'actvidad_oeste', 'vocacion_id', 'vialidad_id'], 'safe'],
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
        $query = RuidoVpublica::find();

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
            'fecha_solicitud' => $this->fecha_solicitud,
            'inicio_actividades' => $this->inicio_actividades,
            'fin_actividades' => $this->fin_actividades,
        ]);

        $query->andFilterWhere(['like', 'nombre_solicitante', $this->nombre_solicitante])
            ->andFilterWhere(['like', 'delegacion', $this->delegacion])
            ->andFilterWhere(['like', 'colonia', $this->colonia])
            ->andFilterWhere(['like', 'calle', $this->calle])
            ->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'codigo_postal', $this->codigo_postal])
            ->andFilterWhere(['like', 'telefono_solicitante', $this->telefono_solicitante])
            ->andFilterWhere(['like', 'horas_solicitadas', $this->horas_solicitadas])
            ->andFilterWhere(['like', 'actividad_norte', $this->actividad_norte])
            ->andFilterWhere(['like', 'actividad_sur', $this->actividad_sur])
            ->andFilterWhere(['like', 'actividad_este', $this->actividad_este])
            ->andFilterWhere(['like', 'actvidad_oeste', $this->actvidad_oeste])
            ->andFilterWhere(['like', 'vocacion_id', $this->vocacion_id])
            ->andFilterWhere(['like', 'vialidad_id', $this->vialidad_id]);

        return $dataProvider;
    }
}
