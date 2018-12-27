<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->registerCssFile('css/news.css?201812131745', ['depends' => ['yii\bootstrap\BootstrapPluginAsset']]);

$this->title = Yii::t('app', 'News');
//$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-new">
            <div class="clearfix">
                <div class="pull-left date">
                    01.11.18
                </div>
            </div>
            <h4><?= Yii::t('news', 'Russian-Belgian cooperation') ?></h4>
            <div style="background: url('/img/news/2018110101.png') center center no-repeat / cover" class="row poster"></div>
            <p>
                <?= Yii::t('news', 'In collaboration with the research team of the Ghent University, an information system of Petroglyphs of the Turu-Alty Kosh-Agach district, Altai republic was developed.') ?>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-new">
            <div class="clearfix">
                <div class="pull-left date">
                    15.10.18
                </div>
            </div>
            <h4><?= Yii::t('news', 'Expedition to Chagan') ?></h4>
            <div style="background: url('/img/news/2018101501.jpg') center center no-repeat / cover" class="row poster"></div>
            <p>
                <?= Yii::t('news', 'The results of the expedition to Chagan, Kosh-Agach district, r. Altai in August 2018. 50 three-dimensional models of rock images were built, a terrain model based on aerial photography was assembled.') ?>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-new">
            <div class="clearfix">
                <div class="pull-left date">
                    03.07.18
                </div>
            </div>
            <h4><?= Yii::t('news', 'Project start') ?></h4>
            <div style="background: url('/img/news/2018070301.jpg') center center no-repeat / cover" class="row poster"></div>
            <p>
                <?= Yii::t('news', 'The project to develop an effective technology for documenting archaeological objects was financed by the Russian Science Foundation as part of the “Research by scientific groups under the guidance of young scientists” event. Grant issued for 3 years.') ?>
            </p>
        </div>
    </div>
</div>

