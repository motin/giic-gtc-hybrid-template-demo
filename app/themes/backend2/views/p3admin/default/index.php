<?php
$this->breadcrumbs = array(
    $this->module->id,
);
?>

<?php $this->widget("TbBreadcrumbs", array("links" => $this->breadcrumbs)) ?>

<h1><?php echo Yii::t('P3AdminModule.module', 'Application'); ?>
    <small><?php echo Yii::t('P3AdminModule.module', 'Dashboard'); ?></small>
</h1>

<div class="flash-notice">
    This code of this app is hosted <?php print CHtml::link('here', 'https://github.com/motin/giic-gtc-hybrid-template-demo'); ?>.
</div>

<?php
$this->widget(
    'p3widgets.components.P3WidgetContainer',
    array(
         'id'                 => 'backend',
         'varyByRequestParam' => P3Page::PAGE_ID_KEY,
         'checkAccess'        => 'Admin'
    )
) ?>


<?php
$this->beginWidget('CMarkdown');
$readme = Yii::app()->basePath . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'README.md';
if (is_file($readme)) {
    echo file_get_contents($readme);
}
$this->endWidget();
?>
