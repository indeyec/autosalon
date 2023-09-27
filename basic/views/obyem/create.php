<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Obyem $model */

$this->title = 'Create Obyem';
$this->params['breadcrumbs'][] = ['label' => 'Obyems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obyem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
