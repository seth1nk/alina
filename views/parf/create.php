<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Parf $model */

$this->title = 'Добавить парфюм';
$this->params['breadcrumbs'][] = ['label' => 'Parves', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parf-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
