<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Setoob $model */

$this->title = 'Обновить запись: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Setoobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="setoob-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
