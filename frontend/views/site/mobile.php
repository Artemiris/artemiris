<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('mobile', 'Mobile Application');
//$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Yii::t('mobile', 'A special PetrogisMobile application for Android mobile devices will be useful for working on rock art monuments. The application allows to quickly document panels with petroglyphs, their geographical coordinates and orientation in automatic mode. The application can work offline, and when access to the Internet appears, automatically uploads the collected data to the information system artemiris.org.') ?>
</p>

<p>
    <?= Yii::t('mobile', 'The application allows to use data from the information system to navigate through monuments – to search and display on the map the desired panel, its location relative to the current position of the user.') ?>
</p>

<p>
    <?= Yii::t('mobile', 'To install the application, it is needed to download the application file by the link and run its installation on the device. In the mobile device settings, it should be allowed to install applications from unknown sources.') ?>
</p>

<p>
    <?= Yii::t('mobile', 'To document a rock drawing or surface using a mobile application, the following actions should be performed in the specified order:') ?>
</p>

<ol>
    <li>
        <?= Yii::t('mobile', 'Press the “Photo” button, then using the opened object photographing interface, take a snapshot of the object. The mobile device in this case should be located as parallel as possible to the photographed plane. The orientation of the plane will be automatically set based on the orientation in the space of the mobile device.') ?>
    </li>
    <li>
        <?= Yii::t('mobile', 'Enter the name of the object into the corresponding field from the virtual keyboard or speech recognition system.') ?>
    </li>
    <li>
        <?= Yii::t('mobile', 'Ensure that the coordinates of the device location are displayed in the appropriate fields. If this does not happen - you need to wait, the cold start of GPS can take up to 5 minutes, but this usually happens only when you start the application for the first time in a new place.') ?>
    </li>
    <li>
        <?= Yii::t('mobile', 'Click the “Save” button to save data to the local device database.') ?>
    </li>
    <li>
        <?= Yii::t('mobile', 'When access to the Internet appears, click the “Sync” button to synchronize the collected data with the information system artemiris.org.') ?>
    </li>
</ol>

<h2><a href="/apk/petrogisMobile.apk"><?= Yii::t('mobile', 'Download Mobile Application (APK file)') ?></a></h2>