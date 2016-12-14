<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Accidente */

$this->title = 'Create Accidente';
$this->params['breadcrumbs'][] = ['label' => 'Accidentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accidente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
