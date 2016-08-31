<?php

namespace frontend\models\informePreventivo;

use Yii;

/**
 * This is the model class for table "informe_preventivo".
 *
 * @property integer $id
 * @property date $fecha_solicitud
 * @property string $nombre_solicitante
 * @property string $nacionalidad
 * @property string $rfc
 * @property string $actividad_principal
 * @property string $nombre_proyecto
 * @property date $inicio_actividad
 * @property string $delegacion
 * @property string $colonia
 * @property string $calle
 * @property string $numero
 * @property string $clave_catastral
 * @property string $codigo_postal
 * @property string $telefono
 * @property string $actividad_norte
 * @property string $actividad_sur
 * @property string $actividad_este
 * @property string $actividad_oeste
 * @property string $vocacion_id
 * @property string $energia_id
 * @property string $combustible_id
 * @property string $anexo_1
 * @property string $anexo_2
 * @property string $anexo_3
 * @property string $anexo_4
 * @property string $anexo_5
 */
class InformePreventivo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'informe_preventivo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_solicitud', 'nombre_solicitante', 'nacionalidad', 'rfc', 'actividad_principal', 'nombre_proyecto', 'inicio_actividad', 'delegacion', 'colonia', 'calle', 'numero', 'clave_catastral', 'codigo_postal', 'telefono', 'actividad_norte', 'actividad_sur', 'actividad_este', 'actividad_oeste', 'vocacion_id', 'energia_id', 'combustible_id', 'anexo_1', 'anexo_2', 'anexo_3', 'anexo_4', 'anexo_5'], 'string', 'max' => 255],
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
            'nacionalidad' => 'Nacionalidad',
            'rfc' => 'RFC',
            'actividad_principal' => 'Actividad principal que realiza la empresa',
            'nombre_proyecto' => 'Nombre Proyecto',
            'inicio_actividad' => 'Inicio Actividad',
            'delegacion' => 'Delegación',
            'colonia' => 'Colonia',
            'calle' => 'Calle',
            'numero' => 'Número',
            'clave_catastral' => 'Clave Catastral',
            'codigo_postal' => 'C. P.',
            'telefono' => 'Telefono',
            'actividad_norte' => 'Actividad Norte',
            'actividad_sur' => 'Actividad Sur',
            'actividad_este' => 'Actividad Este',
            'actividad_oeste' => 'Actividad Oeste',
            'vocacion_id' => 'Vocacion ID',
            'energia_id' => 'Energia ID',
            'combustible_id' => 'Combustible ID',
            'anexo_1' => 'Anexo I.- Croquis de localización del predio',
            'anexo_2' => 'Anexo II.- Informe fotográfico',
            'anexo_3' => 'Anexo III.- Acreditación de la legalidad para la utilizaión del predio',
            'anexo_4' => 'Anexo IV.- Factibilidad de Usos de Suelo',
            'anexo_5' => 'Anexo V.- Carta Poder',
        ];
    }
}
