<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Marka;
use app\models\Created;
use app\models\Model;
use app\models\Restayling;
use app\models\Obyem;


$items = Marka::find()
    ->select(['name'])
    ->indexBy('id')
    ->column();

$items2 = Model::find()
    ->select(['name'])
    ->indexBy('id')
    ->column();
$items3 = Restayling::find()
    ->select(['name'])
    ->indexBy('id')
    ->column();
$items4 = Obyem::find()
    ->select(['name'])
    ->indexBy('id')
    ->column();
$items5 = Created::find()
    ->select(['name'])
    ->indexBy('id')
    ->column();
/** @var yii\web\View $this */
/** @var app\models\Request $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_marka')->dropdownList(
        $items,
        ['prompt' => 'Select marka']
    ); ?>

    <?= $form->field($model, 'id_model')->dropdownList(
        $items2,
        ['prompt' => 'Select model']

    ); ?>

    <?= $form->field($model, 'id_restayling')->dropdownList(
        $items3,
        ['prompt' => 'Select restayling']
    ); ?>

    <?= $form->field($model, 'id_obyem')->dropdownList(
        $items4,
        ['prompt' => 'Select obyem']
    ); ?>

    <?= $form->field($model, 'id_created')->dropdownList(
        $items5,
        ['prompt' => 'Select created']
    ); ?>
    <?= $form->field($model, 'status')->textInput()?>

    

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>