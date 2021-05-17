<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::t('app', 'Guides for 3d modeling and post-processing');

?>
<h1><?= Html::encode($this->title)?></h1>
<p>
    <?= Yii::t('app', 'For the first time, a technology for preparing three-dimensional archaeological models of a non-uniform density of a polygonal grid is presented, which makes it possible to significantly optimize models of rock art panels. The technique allows to reduce the file size of the 3d petroglyph model by selectively reducing the resolution of areas free from the drawing. The relief of the rock drawing on such models remains in original resolution.')?>
</p>
<p>
    <i><?=Yii::t('app', 'Technique for performing inhomogeneous simplification of a three-dimensional model based on a tracing mask')?>:</i> <?=Html::a(Yii::t('app', 'Download'), 'mesh')?> <a href="/materials/mesh_simplification.pdf"><?= Yii::t('app', 'View') ?></a>
</p>
<p>
    <?= Yii::t('app', 'For the first time, an original technique for transferring petroglyph drawings from two-dimensional images (photographs, orthophoto images) to three-dimensional models of panles has been developed and tested. The technique has significant practical value, since archeologists-petroglyphs experts, as a rule, are not professionals in 3d-modeling, while drawing on a model requires special skills. Drawing on two-dimensional images does not require special knowledge of working with a PC.')?>
</p>
<p>
    <i><?=Yii::t('app', 'Technique of transferring tracings to a 3d model from a photographic image, orthophoto or texture of another model')?>:</i> <?=Html::a(Yii::t('app', 'Download'), 'warp')?> <a href="/materials/texture_warp.pdf"><?= Yii::t('app', 'View') ?></a>
</p>