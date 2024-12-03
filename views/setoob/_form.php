<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Setoob $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="setoob-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'название')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IP_адрес')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MAC_адрес')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'местоположения')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'дата_установки')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
