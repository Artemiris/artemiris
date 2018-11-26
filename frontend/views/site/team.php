<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->registerCssFile('css/team.css', ['depends' => ['yii\bootstrap\BootstrapPluginAsset']]);

$this->title = Yii::t('app', 'Team');
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>


<h3><?= Yii::t('team', 'Organizations') ?></h3>
<p>
    <?= Yii::t('team', 'Novosibirsk State University') ?>
</p>
<p>
    <?= Yii::t('team', 'Laboratory of Multidisciplinary Studies of Primitive Art of Eurasia (LMIPIE)') ?>
</p>
<br>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/kazakov.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Kazakov Vladislav Vitalyevich') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Project Manager, Senior Scientist LMIA') ?>.
                <div class="email"><a href="mailto:vkazakov@phys.nsu.ru">vkazakov@phys.nsu.ru</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/lbova.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Lbova Lyudmila Valentinovna') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Research and documentation of mobile plastics in Southern Siberia, v.s.n.s. LMIA') ?>.
                <div class="email"><a href="mailto:lbovapnr5@gmail.com">lbovapnr5@gmail.com</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/kovalev.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Kovalev Vasily Sergeevich') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Studies of the documentation of rock images, 3D modeling, development of web interfaces and information systems, engineer LMIPIE') ?>.
                <div class="email"><a href="mailto:vasiliy.s.kovalev@gmail.com">vasiliy.s.kovalev@gmail.com</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/zhumadilov.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Zhumadilov Kair Bekbatyrovich') ?>
            </b>
            <p>
                <?= Yii::t('team', '3D modeling, development of web interfaces and information systems, LMIPIE engineer') ?>.
                <div class="email"><a href="mailto:zhumadilov@nsu.ru">zhumadilov@nsu.ru</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/cheremisin.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Cheremisin Dmitry Vladimirovich') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Research and documentation of rock images of South Siberia, senior researcher LMIPIE') ?>.
                <div class="email"><a href="mailto:topsya@bk.ru">topsya@bk.ru</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/simukhin.jpg', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Simukhin Alexander Ilyich') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Research and documentation of rock images of South Siberia, junior researcher Institute of Mongolian Studies, Buddhology and Tibetology SB RAS') ?>.
                <div class="email"><a href="mailto:simply.sima@mail.ru">simply.sima@mail.ru</a></div>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="item-user">
            <?= Html::img('/img/team/user.png', ['class' => 'img img-responsive']) ?>
            <b>
                <?= Yii::t('team', 'Rostyazhenko Tatyana Evgenievna') ?>
            </b>
            <p>
                <?= Yii::t('team', 'Research and documentation of mobile plastics in Southern Siberia, student of the National Mining University') ?>.
                <div class="email"><a href="mailto:miss.oldman2017@yandex.ru">miss.oldman2017@yandex.ru</a></div>
            </p>
        </div>
    </div>
</div>

<?= Yii::t('team', '') ?>
