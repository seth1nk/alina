<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Parf $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="parf-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'название')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'бренд')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'объем')->textInput() ?>

    <?= $form->field($model, 'пол')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'цена')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
