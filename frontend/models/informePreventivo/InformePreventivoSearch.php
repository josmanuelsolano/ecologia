<?php

namespace frontend\models\informePreventivo;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\informePreventivo\InformePreventivo;

/**
 * InformePreventivoSearch represents the model behind the search form of `frontend\models\informePreventivo\InformePreventivo`.
 */
class InformePreventivoSearch extends InformePreventivo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['fecha_solicitud', 'nombre_solicitante', 'nacionalidad', 'rfc', 'actividad_principal', 'nombre_proyecto', 'inicio_actividad', 'delegacion', 'colonia', 'calle', 'numero', 'clave_catastral', 'codigo_postal', 'telefono', 'actividad_norte', 'actividad_sur', 'actividad_este', 'actividad_oeste', 'vocacion_id', 'energia_id', 'combustible_id', 'anexo_1', 'anexo_2', 'anexo_3', 'anexo_4', 'anexo_5'], 'safe'],
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
        $query = InformePreventivo::find();

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
        ]);

        $query->andFilterWhere(['like', 'fecha_solicitud', $this->fecha_solicitud])
            ->andFilterWhere(['like', 'nombre_solicitante', $this->nombre_solicitante])
            ->andFilterWhere(['like', 'nacionalidad', $this->nacionalidad])
            ->andFilterWhere(['like', 'rfc', $this->rfc])
            ->andFilterWhere(['like', 'actividad_principal', $this->actividad_principal])
            ->andFilterWhere(['like', 'nombre_proyecto', $this->nombre_proyecto])
            ->andFilterWhere(['like', 'inicio_actividad', $this->inicio_actividad])
            ->andFilterWhere(['like', 'delegacion', $this->delegacion])
            ->andFilterWhere(['like', 'colonia', $this->colonia])
            ->andFilterWhere(['like', 'calle', $this->calle])
            ->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'clave_catastral', $this->numero])
            ->andFilterWhere(['like', 'codigo_postal', $this->codigo_postal])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'actividad_norte', $this->actividad_norte])
            ->andFilterWhere(['like', 'actividad_sur', $this->actividad_sur])
            ->andFilterWhere(['like', 'actividad_este', $this->actividad_este])
            ->andFilterWhere(['like', 'actividad_oeste', $this->actividad_oeste])
            ->andFilterWhere(['like', 'vocacion_id', $this->vocacion_id])
            ->andFilterWhere(['like', 'energia_id', $this->energia_id])
            ->andFilterWhere(['like', 'combustible_id', $this->combustible_id])
            ->andFilterWhere(['like', 'anexo_1', $this->anexo_1])
            ->andFilterWhere(['like', 'anexo_2', $this->anexo_2])
            ->andFilterWhere(['like', 'anexo_3', $this->anexo_3])
            ->andFilterWhere(['like', 'anexo_4', $this->anexo_4])
            ->andFilterWhere(['like', 'anexo_5', $this->anexo_5]);

        return $dataProvider;
    }
}
