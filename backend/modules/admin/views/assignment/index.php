<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel backend\modules\admin\models\searchs\Assignment */
/* @var $usernameField string */
/* @var $extraColumns string[] */

$this->title = Yii::t('rbac-admin', 'Assignments');
$this->params['breadcrumbs'][] = $this->title;

$columns = [
    ['class' => 'yii\grid\SerialColumn'],
    $usernameField,
];
if (!empty($extraColumns)) {
    $columns = array_merge($columns, $extraColumns);
}
$columns[] = [
    'class'    => 'yii\grid\ActionColumn',
    'template' => '{view}',
];
?>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">
        </h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i>
            </button>
        </div>
    </div>
    <div class="box-body">

        <?php Pjax::begin(); ?>
        <?=
        GridView::widget([
            'layout' => "{items}\n{summary}{pager}",
            'dataProvider' => $dataProvider,
            'filterModel'  => $searchModel,
            'columns'      => $columns,
        ]);
        ?>
        <?php Pjax::end(); ?>
    </div>
</div>
