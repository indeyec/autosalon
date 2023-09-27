<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Created $model */

$this->title = 'Update Created: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Createds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="created-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
