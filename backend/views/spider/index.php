<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Spiders');
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginBlock('content-header') ?>
<?= $this->title . ' ' . Html::a(Yii::t('app', 'Create Spider'), ['create'], ['class' => 'btn btn-primary btn-flat btn-xs']) ?>
<?php $this->endBlock() ?>

    <div class="box box-primary">
        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    'id',
                    'name',
                    'title',
                    'domain',
                    'page_dom',
                    // 'list_dom',
                    // 'time_dom',
                    // 'content_dom',
                    // 'title_dom',
                    // 'target_category',
                    // 'target_category_url:url',

                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{view} {update} {delete} {craw}',
                        'buttons' => [
                            'craw' => function($url, $model, $key) {
                                return Html::a('采集', ['craw', 'id' => $model->id], ['data-method' => 'post', 'data-ajax' => 1]);
                            }
                        ]
                    ],
                ],
            ]); ?>
        </div>
    </div>
