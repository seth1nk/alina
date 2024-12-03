<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SetoobSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="setoob-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'название') ?>

    <?= $form->field($model, 'IP_адрес') ?>

    <?= $form->field($model, 'MAC_адрес') ?>

    <?= $form->field($model, 'местоположения') ?>

    <?php // echo $form->field($model, 'дата_установки') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
