<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AccidenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Accidentes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accidente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Accidente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fecha_reg',
            'fecha_acc',
            'clima',
            'factor_riesgo',
            // 'severidad',
            // 'latitud',
            // 'longitud',
            // 'seguro',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
