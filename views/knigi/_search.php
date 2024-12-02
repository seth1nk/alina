<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\KnigiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="knigi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'название') ?>

    <?= $form->field($model, 'автор') ?>

    <?= $form->field($model, 'год_выпуска') ?>

    <?= $form->field($model, 'жанр') ?>

    <?php // echo $form->field($model, 'количество_страниц') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
