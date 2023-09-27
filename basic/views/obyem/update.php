<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Obyem $model */

$this->title = 'Update Obyem: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Obyems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="obyem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
