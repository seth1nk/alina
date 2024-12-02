<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Parf $model */

$this->title = 'Обновить парфюм: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Parves', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parf-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
