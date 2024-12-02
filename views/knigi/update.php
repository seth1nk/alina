<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Knigi $model */

$this->title = 'Обновить данные о книге: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Knigis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="knigi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
