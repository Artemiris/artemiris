<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->registerCssFile('css/team.css', ['depends' => ['yii\bootstrap\BootstrapPluginAsset']]);

$this->title = Yii::t('app', 'Team');
//$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>


<h3><?= Yii::t('team', 'Organizations') ?></h3>
<p>
    <?= Yii::t('team', 'Novosibirsk State University') ?>,
    <?= Yii::t('team', '«Multidisciplinary Research on Prehistoric Art in Eurasia» Lab (LIA ARTEMIR)') ?>
</p>
<br>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/kazakov.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Kazakov Vladislav') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Project Director, Senior Researcher at LIA ARTEMIR') ?>.
                <div class="email"><a href="mailto:vkazakov@phys.nsu.ru">vkazakov@phys.nsu.ru</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/lbova.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Lbova Lyudmila') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Research and documentation of mobile plastics in Southern Siberia, Lead Researcher at LIA ARTEMIR') ?>.
                <div class="email"><a href="mailto:lbovapnr5@gmail.com">lbovapnr5@gmail.com</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/kovalev.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Kovalev Vasily') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Studies of the documentation of rock images, 3D modeling, development of web interfaces and information systems, engineer at LIA ARTEMIR') ?>.
                <div class="email"><a href="mailto:vasiliy.s.kovalev@gmail.com">vasiliy.s.kovalev@gmail.com</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/zhumadilov.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Zhumadilov Kair') ?>
            </b>
            <p>
                <?= Yii::t('team', '3D modeling, development of web interfaces and information systems, engineer at LIA ARTEMIR') ?>.
                <div class="email"><a href="mailto:zhumadilov@nsu.ru">zhumadilov@nsu.ru</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/simukhin.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Simukhin Alexander') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Research and documentation of rock images of South Siberia, Junior Researcher at Institute for Mongolian, Buddhist and Tibetan Studies SB RAS') ?>.
                <div class="email"><a href="mailto:simply.sima@mail.ru">simply.sima@mail.ru</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/rostyazhenko.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Rostyazhenko Tatyana') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Research and documentation of mobile plastics in Southern Siberia, student at Novosibirsk State University') ?>.
                <div class="email"><a href="mailto:miss.oldman2017@yandex.ru">miss.oldman2017@yandex.ru</a></div>
            </p>
        </div>
    </div>
</div>

<?= Yii::t('team', '') ?>
