<?php

use common\models\Document;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;

$this->title = "Danh sách tài liệu";
$cdnUrl = Yii::$app->params['frontend'];

$gridColumns = [
    [
        'class' => 'kartik\grid\SerialColumn',
        'contentOptions' => ['class' => 'kartik-sheet-style text-center'],
        'vAlign' => 'middle',
        'hAlign' => 'center',
    ],
    [
        'class' => 'kartik\grid\DataColumn',
        'contentOptions' => ['class' => 'kartik-sheet-style text-center'],
        'attribute' => 'avatar',
        'label' => 'Hình ảnh',
        'vAlign' => 'middle',
        'hAlign' => 'center',
        'value' => function ($model, $key, $index, $widget) use ($cdnUrl) {
            return \yii\helpers\Html::img($cdnUrl . '/' . $model['avatar'], ['width' => '200px', 'alt' => $model['title']]);
        },
        'format' => 'raw',
        'filter' => false
    ],
    [
        'class' => 'kartik\grid\DataColumn',
        'contentOptions' => ['class' => 'kartik-sheet-style'],
        'attribute' => 'title',
        'label' => 'Tiêu đề',
        'vAlign' => 'middle',
        'hAlign' => 'center',
        'format' => 'raw',
    ],
    [
        'class' => 'kartik\grid\DataColumn',
        'contentOptions' => ['class' => 'kartik-sheet-style text-center'],
        'attribute' => 'doc_types',
        'label' => 'Định dạng',
        'vAlign' => 'middle',
        'hAlign' => 'center',
        'filterType' => GridView::FILTER_SELECT2,
        'filter' => [null => 'Không xác định', 0 => 'Firmware', 1 => 'Hình ảnh', 2 => 'Files'],
        'filterWidgetOptions' => [
            'pluginOptions' => ['allowClear' => true],
        ],
        'filterInputOptions' => ['placeholder' => '<-- Chọn trạng thái -->'], // allows multiple authors to be chosen
        'value' => function ($model) {
            $arrTypes = ['Firmware', 'Hình ảnh', 'Files'];
            return $arrTypes[$model['doc_types']];
        },
        'format' => 'raw',
    ],
    [
        'class' => 'kartik\grid\DataColumn',
        'contentOptions' => ['class' => 'kartik-sheet-style text-center'],
        'attribute' => 'link',
        'label' => false,
        'vAlign' => 'middle',
        'hAlign' => 'center',
        'format' => 'raw',
        'value' => function ($model, $key, $index, $widget) use ($cdnUrl) {
            return \yii\helpers\Html::a('<i class="fas fa-download"></i> Tải xuống', $cdnUrl . '/uploads/' . $model['link'], ['target' => '_blank', 'class' => 'btn btn-danger download_link', 'download' => $model['title']]);
        },
        'filter' => false
    ],
];

Pjax::begin();
echo GridView::widget([
    'id' => 'gridview',
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'options' => ['style' => 'table-layout:fixed;'],
    'layout' => '{summary}\n{items}\n{pager}',
    'columns' => $gridColumns,
    'responsive' => true,
    'responsiveWrap' => true,
    'hover' => true,
    'headerRowOptions' => ['class' => 'kartik-sheet-style text-center'],
    'filterRowOptions' => ['class' => 'kartik-sheet-style'],
    'panel' => [
        'type' => GridView::TYPE_DEFAULT,
        'heading' => '<h3 class="panel-title"><i class="fas fa-list-ul"></i> Danh sách tài liệu </h3>',
        // uncomment the following code to disable pagination
        //        'footer' => false,
    ],
    'pjax' => true,
    'toolbar' => false,
    'toggleDataOptions' => [
        'all' => [
            'icon' => 'fas fa-expand-arrows-alt',
            'label' => Yii::t('app', 'All'),
            'class' => 'btn btn-default my-2 mr-2',
            'title' => 'Show all data',
            'style' => 'border-radius:12px !important; border: 1px solid #C0C0C0'
        ],
        'page' => [
            'icon' => 'fas fa-compress-arrows-alt',
            'label' => Yii::t('app', 'Pages'),
            'class' => 'btn btn-light my-2 mr-2',
            'title' => 'Show first page data',
            'style' => 'border-radius:12px !important; border: 1px solid #C0C0C0'
        ],
    ],
    'bordered' => true,
    'striped' => false,
    'condensed' => false,
    'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
]);
Pjax::end();
?>