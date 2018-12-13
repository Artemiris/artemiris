<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app', 'Resources');
//$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>

<h2>
    <?= Yii::t('resources', '') ?>
</h2>
<?= Yii::t('resources', '') ?>


<div class="row">
    <div class="col-xs-12 col-sm-8">
        <h3><?= Yii::t('resources', 'GIS') ?> «<?= Yii::t('resources', 'Petroglyphs') ?>»</h3>
        <p>
            <?= Yii::t('resources', 'Geographic information system on Altai petroglyphs. The project is in active development in 2017-2018. The database contains {n1} objects ({n2} - Chagan, Kosh-Agach district, {n3} - Shalobolino, Khakassia) with a basic data set - geographical location, a series of photos, a brief description.', [
                'n1' => 627,
                'n2' => 586,
                'n3' => 40,
            ]) ?>
        </p>
        <p>
            <?= Yii::t('resources', 'Access to the system is limited, requests for access are accepted by e-mail') ?>:
            <a href="mailto:mirrorlab.artemir@gmail.com">mirrorlab.artemir@gmail.com</a>
        </p>
        <p>
            <a href="http://petrogis.mmc.nsu.ru/" target="_blank"
               class="btn btn-primary"><?= Yii::t('app', 'Go to') ?></a>
        </p>
    </div>
    <div class="col-xs-12 col-sm-4">
        <img src="/img/resources/petrogis.png" alt="petrogis" class="img-responsive">
    </div>
</div>
<br>
<!--<h3>--><? //= Yii::t('resources', '3D Gallery') ?><!-- ARTEMIRIS</h3>-->

<!--<h3>--><? //= Yii::t('resources', 'Malta') ?><!--</h3>-->

<div class="row">
    <div class="col-xs-12 col-sm-8">
        <h3><?= Yii::t('resources', 'GIS') ?> «AMSP»</h3>
        <p>
            <?= Yii::t('resources', 'Geographic information system on the petroglyphs of the Turu-Alty Kosh-Agach district. The data was collected by the ARCHAEO Research Group of the University of Ghent under the guidance of Professor Jean Bourgeois (University of Ghent, Belgium) in 2014-2015. The database contains {n} an object with a basic data set - geographical location, a series of photos, a brief description.', [
                'n' => 321,
            ]) ?>
        </p>
        <p>
            <?= Yii::t('resources', 'Access to the system is limited, requests for access can be sent to prof. Jean Bourgeois by e-mail') ?>
            :
            <a href="mailto:Jean.Bourgeois@UGent.be">Jean.Bourgeois@UGent.be</a>
        </p>
        <p>
            <a href="http://www.amsp.ugent.be/" target="_blank"
               class="btn btn-primary"><?= Yii::t('app', 'Go to') ?></a>
        </p>
    </div>
    <div class="col-xs-12 col-sm-4">
        <img src="/img/resources/amsp.jpg" alt="amsp" class="img-responsive">
    </div>
</div>
<br>

<div class="row">
    <div class="col-xs-12 col-sm-8">
        <h3><?= Yii::t('resources', '3D Gallery') ?> <?= Yii::t('resources', 'NSU') ?></h3>
        <p>
            <?= Yii::t('resources', 'Gallery of three-dimensional models developed at the Novosibirsk State University. The database contains about {n} models, mainly archaeological subjects.', [
                'n' => 100,
            ]) ?>
        </p>
        <p>
            <a href="https://3d.nsu.ru/" target="_blank" class="btn btn-primary"><?= Yii::t('app', 'Go to') ?></a>
        </p>
    </div>
    <div class="col-xs-12 col-sm-4">
        <img src="/img/resources/3d.jpg" alt="3d" class="img-responsive">
    </div>
</div>
<br>


<div class="row">
    <div class="col-xs-12 col-sm-8">
        <h3>Sketchfab Artemir</h3>
        <p>
            <?= Yii::t('resources', 'The Multidisciplinary Research Laboratory of the Primitive Art of Eurasia on the website-aggregator of three-dimensional models') ?>
        </p>
        <p>
            <a href="https://sketchfab.com/artemir" target="_blank"
               class="btn btn-primary"><?= Yii::t('app', 'Go to') ?></a>
        </p>
    </div>
    <div class="col-xs-12 col-sm-4">
        <img src="/img/resources/sketchfab.jpg" alt="sketchfab" class="img-responsive">
    </div>
</div>
<br>
