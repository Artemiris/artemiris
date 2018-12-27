<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app', 'About');
//$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Yii::t('project', 'Nowadays, one of the main problems of archaeology is documentation and systematization of historical and cultural objects. During the last decades sufficiently large amount of archaeological data were marked and described, the data were also presented in monographic or cataloged types. In recent years technical progress has significantly influenced the ways and possibilities of documentation of archaeological objects. At the same time, despite the new significant opportunities, the issue of documentation and systematization of archaeological knowledge has a number of unsolved problems:') ?>
<ul>
    <li>
        <?= Yii::t('project', 'First, scientific and socially important knowledge of cultural heritage (the objects of the archaeological heritage, individual archaeological finds, lands and territories of historical and cultural significance) are predominantly presented in a fragmented form. Today many scientific groups have their own databases, which are not published or made available to colleagues. The exchange of such data is currently quite difficult or impossible at all.') ?>
    </li>
    <li>
        <?= Yii::t('project', 'Secondly, nowadays there is no unified approach to the description and attribution of archaeological objects. Despite existing attempts to develop a common standard, each scientific group uses its own standard, basically.') ?>
    </li>
    <li>
        <?= Yii::t('project', 'Thirdly, it is possible to mark a certain lag of the existing archaeological practice from the technical progress in the field of documentation of archaeological objects methods.') ?>
    </li>
    <li>
        <?= Yii::t('project', 'Fourthly, the issue of providing access and exchange of data on vulnerable objects has not been resolved. As a result, today, whenever possible, all available data is hidden from the public, while the quality and effectiveness of scientific communication, as well as popularization of science opportunities, suffer.') ?>
    </li>
</ul>
</p>

<p>
    <?= Yii::t('project', 'The goal of the project is to develop an effective technology for documenting archaeological objects of the visual series (artifacts, sites, site complexes), sharing data and publishing it in open access (to an acceptable extent). In particular, it is supposed to develop a single archaeological information system and database, which are to document and store the petroglyphs, archaeological finds, archaeological sites, including a full description, attribution of the objects and 3D models of the objects. As a part of building an information system, it is supposed to develop a mapping technique using GIS services, create an effective access system for researchers and the general public and a control system of authorship of input materials, an implementation of prototypes of automated intelligent tools for searching analogies, patterns and recognition of artistic plots. Filling the system should be provided not only by the team of project authors, but also by direct work with the system of third-party specialists, groups and organizations.') ?>
</p>

<p>
    <?= Yii::t('project', 'The project involves the development of optimal algorithmic support for high-precision documentation and study of archaeological objects in the field based on the standardization and automation of the stages of primary documentation, including the use of original mobile applications.') ?>
</p>

<p>
    <?= Yii::t('project', 'The research assumes: an analysis of existing methods of 3D documentation technologies in archaeological field research and in museum practice; development of methods for processing and transformation of unique objects of varying degrees of detail (incl. with significant losses) into a 3D model.') ?>
</p>

<p>
    <?= Yii::t('project', 'The project is supported by “Research by scientific groups under the guidance of young scientists” program of the Russian Science Foundation. Grant No. 18-78-10079 "Development of technology and information systems for documenting and scientific exchange of archaeological data".') ?>
</p>