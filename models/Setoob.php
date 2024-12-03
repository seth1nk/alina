<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "setoob".
 *
 * @property int $id
 * @property string $название
 * @property string $IP_адрес
 * @property string $MAC_адрес
 * @property string $местоположения
 * @property string $дата_установки
 */
class Setoob extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'setoob';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['название', 'IP_адрес', 'MAC_адрес', 'местоположения', 'дата_установки'], 'required'],
            [['дата_установки'], 'safe'],
            [['название'], 'string', 'max' => 15],
            [['IP_адрес'], 'string', 'max' => 50],
            [['MAC_адрес'], 'string', 'max' => 255],
            [['местоположения'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'название' => 'Название',
            'IP_адрес' => 'Ip Адрес',
            'MAC_адрес' => 'Mac Адрес',
            'местоположения' => 'Местоположения',
            'дата_установки' => 'Дата Установки',
        ];
    }
}
