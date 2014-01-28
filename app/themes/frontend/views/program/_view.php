<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('program/view', 'id' => $data->id)); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('date_utc')); ?>:</b>
    <?php echo CHtml::encode($data->date_utc); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('start_time')); ?>:</b>
    <?php echo CHtml::encode($data->start_time); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('leadtext')); ?>:</b>
    <?php echo CHtml::encode($data->leadtext); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->name); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('b_line')); ?>:</b>
    <?php echo CHtml::encode($data->b_line); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('synopsis')); ?>:</b>
    <?php echo CHtml::encode($data->synopsis); ?>
    <br/>

    <?php /*
    <b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
    <?php echo CHtml::encode($data->url); ?>
    <br />

    */
    ?>
    <?php if (Yii::app()->user->checkAccess('Program.*')): ?>
        <div class="admin-container show">
            <?php echo CHtml::link('<i class="icon-edit"></i> ' . Yii::t('model', 'Update {model}', array('{model}' => Yii::t('model', 'Program'))), array('program/update', 'id' => $data->id, 'returnUrl' => Yii::app()->request->url), array('class' => 'btn')); ?>
        </div>
    <?php endif; ?>

</div>
