<?php $this->widget("TbBreadcrumbs", array("links" => $this->breadcrumbs)) ?>

<div class="flash-notice">
    This code of this app is hosted <?php print CHtml::link('here', 'https://github.com/motin/giic-gtc-hybrid-template-demo'); ?>.
</div>

<?php
$this->beginWidget('CMarkdown');
$readme = Yii::app()->basePath . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'README.md';
if (is_file($readme)) {
    // Output everything after first heading only
    $_ = explode("==========", file_get_contents($readme));
    echo $_[1];
}
$this->endWidget();
?>
