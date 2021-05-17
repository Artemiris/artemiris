<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::t('app', 'Results');

?>
<h1><?= Html::encode($this->title)?></h1>
<p>
    Results placeholder text
</p>
<p>
    <?=Yii::t('app', 'Mesh simplification')?>: <?=Html::a(Yii::t('app', 'Download'), 'mesh')?> <a href="/materials/mesh_simplification.pdf"><?= Yii::t('app', 'View') ?></a>
</p>
<p>
    <?=Yii::t('app', 'Texture warping')?>: <?=Html::a(Yii::t('app', 'Download'), 'warp')?> <a href="/materials/texture_warp.pdf"><?= Yii::t('app', 'View') ?></a>
</p>