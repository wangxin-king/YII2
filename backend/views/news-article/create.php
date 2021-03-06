<?php

/* @var $this yii\web\View */
/* @var $model common\models\NewsArticle */

$this->title = Yii::t('backend', 'Create News Article');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'News Articles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-article-create">
    <?php if (Yii::$app->session->hasFlash('Warning')): ?>
        <div class="callout callout-danger">
            <h4>Warning!</h4>
            <p><?= Yii::$app->session->getFlash('Warning') ?></p>
        </div>
    <?php endif; ?>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>

        <div class="box-body">
            <?= $this->render('_form', [
                'model' => $model,
                'categories' => $categories,
            ]) ?>
        </div>
    </div>
</div>