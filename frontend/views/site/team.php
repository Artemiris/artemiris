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
    <?= Yii::t('team', '«Multidisciplinary Research on Prehistoric Art in Eurasia» Lab (MRPAE NSU)') ?>
</p>
<br>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/kazakov.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Vladislav Kazakov') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Project Director, Senior Researcher at Novosibirsk State University (MRPAE NSU)') ?>
                <div class="email"><a href="mailto:vkazakov@phys.nsu.ru">vkazakov@phys.nsu.ru</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/lbova.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Liudmila Lbova') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Research and documentation of portable art in Southern Siberia, Lead Researcher at Novosibirsk State University (MRPAE NSU)') ?>
                <div class="email"><a href="mailto:lbovapnr5@gmail.com">lbovapnr5@gmail.com</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/simukhin.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Aleksandr Simukhin') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Research and documentation of rock art of South Siberia, Junior Researcher at Institute for Mongolian, Buddhist and Tibetan Studies SB RAS') ?>
            <div class="email"><a href="mailto:simply.sima@mail.ru">simply.sima@mail.ru</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/zhumadilov.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Kair Zhumadilov') ?>
            </b>
            <p>
                <?= Yii::t('team', '3D modeling, development of web interfaces and information systems, engineer at Novosibirsk State University (MRPAE NSU)') ?>
            <div class="email"><a href="mailto:zhumadilov@nsu.ru">zhumadilov@alumni.nsu.ru</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/kovalev.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Vasily Kovalev') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Studies of the methods for documentation of rock art, 3D modeling, development of web interfaces and information systems, engineer at Novosibirsk State University (MRPAE NSU)') ?>
                <div class="email"><a href="mailto:vasiliy.s.kovalev@gmail.com">vasiliy.s.kovalev@gmail.com</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/pankina.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Anna Pankina') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Research and documentation of portable art in Southern Siberia, engineer at Novosibirsk State University (MRPAE NSU)') ?>
            <div class="email"><a href="mailto:pankina1995b@mail.ru">pankina1995b@mail.ru</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/rostyazhenko.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Tatiana Rostiazhenko') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Research and documentation of portable art in Southern Siberia, engineer at Novosibirsk State University (MRPAE NSU)') ?>
                <div class="email"><a href="mailto:miss.oldman2017@yandex.ru">miss.oldman2017@yandex.ru</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/konokhov.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Vladimir Konokhov') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Research and documentation of rock art in Southern Siberia, senior researcher at Minusinsk Museum of Local Lore named after N.M. Martyanov') ?>
            <div class="email"><a href="mailto:vladimir.konohov@mail.ru">vladimir.konohov@mail.ru</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/gubar.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Yuliya Gubar') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Research and documentation of pigments and portable art in Southern Siberia and the Far East, engineer at Novosibirsk State University (MRPAE NSU)') ?>
            <div class="email"><a href="mailto:julfoxzzz@gmail.com">julfoxzzz@gmail.com</a></div>
            </p>
        </div>
    </div>
</div>

<?= Yii::t('team', '') ?>
