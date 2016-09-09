<?php

namespace app\models\ruidoVpublica;

use Yii;

/**
 * This is the model class for table "ruido_vpublica".
 *
 * @property integer $id
 * @property date $fecha_solicitud
 * @property string $nombre_solicitante
 * @property string $delegacion
 * @property string $colonia
 * @property string $calle
 * @property string $numero
 * @property string $codigo_postal
 * @property string $telefono_solicitante
 * @property date $inicio_actividades
 * @property date $fin_actividades
 * @property string $horas_solicitadas
 * @property string $actividad_norte
 * @property string $actividad_sur
 * @property string $actividad_este
 * @property string $actvidad_oeste
 * @property string $vocacion_id
 * @property string $vialidad_id
 */
class RuidoVpublica extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ruido_vpublica';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_solicitud', 'inicio_actividades', 'fin_actividades'], 'safe'],
            [['nombre_solicitante', 'delegacion', 'colonia', 'calle', 'numero', 'codigo_postal', 'telefono_solicitante', 'horas_solicitadas', 'actividad_norte', 'actividad_sur', 'actividad_este', 'actvidad_oeste', 'vocacion_id', 'vialidad_id'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fecha_solicitud' => 'Fecha Solicitud',
            'nombre_solicitante' => 'Nombre Solicitante',
            'delegacion' => 'Delegacion',
            'colonia' => 'Colonia',
            'calle' => 'Calle',
            'numero' => 'Numero',
            'codigo_postal' => 'Codigo Postal',
            'telefono_solicitante' => 'Telefono Solicitante',
            'inicio_actividades' => 'Inicio Actividades',
            'fin_actividades' => 'Fin Actividades',
            'horas_solicitadas' => 'Horas Solicitadas',
            'actividad_norte' => 'Actividad Norte',
            'actividad_sur' => 'Actividad Sur',
            'actividad_este' => 'Actividad Este',
            'actvidad_oeste' => 'Actvidad Oeste',
            'vocacion_id' => 'Vocacion ID',
            'vialidad_id' => 'Vialidad ID',
        ];
    }
}
