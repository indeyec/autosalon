<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Restayling $model */

$this->title = 'Create Restayling';
$this->params['breadcrumbs'][] = ['label' => 'Restaylings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restayling-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
