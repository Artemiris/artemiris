<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app', 'About');
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Yii::t('about', 'The project aims to develop an effective technology for documenting archaeological objects (artifacts, archaeological monuments, complexes of monuments), integration of materials based on the information system and the exchange of such data. It is intended to develop a single archaeological information system and a database on materials from objects in Southern Siberia as a territory with a high concentration of archaeological heritage sites, which are currently represented in a weakly structured form. The implementation of the project proposals will provide a complete documentation of archaeological objects, including a full scientific description, their attribution with illustrations in the form of 3D-models of objects. The project involves the development of optimal algorithmic support for high-precision documentation and study of archaeological objects in the field based on the automation of the stages of primary documentation, including using original mobile applications. Building an information system is supposed to be in a three-tier client-server architecture with a web server as an application server and with a database management system. The information system will be built in a multi-user and multi-role access model, GIS services will be integrated to display spatial data on a map. The results of the project will be presented by an information system hosted on the NSU server, in reports at international conferences, and publication of scientific articles. The proposed development of an information system with the ability to aggregate data, store scientific information, analyze data, model and convert loosely coupled data into competent knowledge and knowledge of this knowledge is of great practical importance. The project seems to be promising in terms of objectively existing needs.')?>
</p>
