<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Setoob $model */

$this->title = 'Создать запись';
$this->params['breadcrumbs'][] = ['label' => 'Setoobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setoob-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
