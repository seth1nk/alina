<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parf".
 *
 * @property int $id
 * @property string $название
 * @property string $бренд
 * @property float $объем
 * @property string $пол
 * @property float $цена
 */
class Parf extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parf';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['название', 'бренд', 'объем', 'пол', 'цена'], 'required'],
            [['объем', 'цена'], 'number'],
            [['название'], 'string', 'max' => 15],
            [['бренд'], 'string', 'max' => 50],
            [['пол'], 'string', 'max' => 30],
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
            'бренд' => 'Бренд',
            'объем' => 'Объем',
            'пол' => 'Пол',
            'цена' => 'Цена',
        ];
    }
}
