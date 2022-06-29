<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Taask3 */

$this->title = 'Create Taask 3';
$this->params['breadcrumbs'][] = ['label' => 'Taask 3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taask3-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
