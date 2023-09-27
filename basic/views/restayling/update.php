<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Restayling $model */

$this->title = 'Update Restayling: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Restaylings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="restayling-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
