<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "knigi".
 *
 * @property int $id
 * @property string $название
 * @property string $автор
 * @property int $год_выпуска
 * @property string $жанр
 * @property int $количество_страниц
 */
class Knigi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'knigi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['название', 'автор', 'год_выпуска', 'жанр', 'количество_страниц'], 'required'],
            [['год_выпуска', 'количество_страниц'], 'integer'],
            [['название'], 'string', 'max' => 15],
            [['автор'], 'string', 'max' => 50],
            [['жанр'], 'string', 'max' => 30],
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
            'автор' => 'Автор',
            'год_выпуска' => 'Год Выпуска',
            'жанр' => 'Жанр',
            'количество_страниц' => 'Количество Страниц',
        ];
    }
}
