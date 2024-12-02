<?php

use app\models\Parf;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ParfSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Прафюмерия';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parf-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать запись', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'название',
            'бренд',
            'объем',
            'пол',
            'цена',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Parf $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
