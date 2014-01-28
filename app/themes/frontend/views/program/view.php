<?php
$this->breadcrumbs[Yii::t('model', 'Programs')] = array('admin');
$this->breadcrumbs[] = $model->id;
?>
<?php $this->widget("TbBreadcrumbs", array("links" => $this->breadcrumbs)) ?>
<h1>

    <?php echo Yii::t('model', 'Program'); ?>
    <small>
        <?php echo Yii::t('model', 'View') ?> #<?php echo $model->id ?>
    </small>

</h1>

<?php $this->renderPartial("_toolbar", array("model" => $model)); ?>
<b><?php echo CHtml::encode($model->getAttributeLabel('id')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($model->id), array('view', 'id' => $model->id)); ?>
<br/>

<b><?php echo CHtml::encode($model->getAttributeLabel('date_utc')); ?>:</b>
<?php echo CHtml::encode($model->date_utc); ?>
<br/>

<b><?php echo CHtml::encode($model->getAttributeLabel('start_time')); ?>:</b>
<?php echo CHtml::encode($model->start_time); ?>
<br/>

<b><?php echo CHtml::encode($model->getAttributeLabel('leadtext')); ?>:</b>
<?php echo CHtml::encode($model->leadtext); ?>
<br/>

<b><?php echo CHtml::encode($model->getAttributeLabel('name')); ?>:</b>
<?php echo CHtml::encode($model->name); ?>
<br/>

<b><?php echo CHtml::encode($model->getAttributeLabel('b_line')); ?>:</b>
<?php echo CHtml::encode($model->b_line); ?>
<br/>

<b><?php echo CHtml::encode($model->getAttributeLabel('synopsis')); ?>:</b>
<?php echo CHtml::encode($model->synopsis); ?>
<br/>

<?php /*
<b><?php echo CHtml::encode($model->getAttributeLabel('url')); ?>:</b>
<?php echo CHtml::encode($model->url); ?>
<br />

    */
?>

<div class="row">
    <div class="span7">
        <h2>
            <?php echo Yii::t('model', 'Data') ?>
            <small>
                <?php echo $model->itemLabel ?>            </small>
        </h2>

        <?php
        $this->widget(
            'TbDetailView',
            array(
                'data' => $model,
                'attributes' => array(
                    array(
                        'name' => 'id',
                        'type' => 'raw',
                        'value' => $this->widget(
                                'TbEditableField',
                                array(
                                    'model' => $model,
                                    'attribute' => 'id',
                                    'url' => $this->createUrl('/program/editableSaver'),
                                ),
                                true
                            )
                    ),
                    array(
                        'name' => 'date_utc',
                        'type' => 'raw',
                        'value' => $this->widget(
                                'TbEditableField',
                                array(
                                    'model' => $model,
                                    'attribute' => 'date_utc',
                                    'url' => $this->createUrl('/program/editableSaver'),
                                ),
                                true
                            )
                    ),
                    array(
                        'name' => 'start_time',
                        'type' => 'raw',
                        'value' => $this->widget(
                                'TbEditableField',
                                array(
                                    'model' => $model,
                                    'attribute' => 'start_time',
                                    'url' => $this->createUrl('/program/editableSaver'),
                                ),
                                true
                            )
                    ),
                    array(
                        'name' => 'leadtext',
                        'type' => 'raw',
                        'value' => $this->widget(
                                'TbEditableField',
                                array(
                                    'model' => $model,
                                    'attribute' => 'leadtext',
                                    'url' => $this->createUrl('/program/editableSaver'),
                                ),
                                true
                            )
                    ),
                    array(
                        'name' => 'name',
                        'type' => 'raw',
                        'value' => $this->widget(
                                'TbEditableField',
                                array(
                                    'model' => $model,
                                    'attribute' => 'name',
                                    'url' => $this->createUrl('/program/editableSaver'),
                                ),
                                true
                            )
                    ),
                    array(
                        'name' => 'b_line',
                        'type' => 'raw',
                        'value' => $this->widget(
                                'TbEditableField',
                                array(
                                    'model' => $model,
                                    'attribute' => 'b_line',
                                    'url' => $this->createUrl('/program/editableSaver'),
                                ),
                                true
                            )
                    ),
                    array(
                        'name' => 'synopsis',
                        'type' => 'raw',
                        'value' => $this->widget(
                                'TbEditableField',
                                array(
                                    'model' => $model,
                                    'attribute' => 'synopsis',
                                    'url' => $this->createUrl('/program/editableSaver'),
                                ),
                                true
                            )
                    ),
                    array(
                        'name' => 'url',
                        'type' => 'raw',
                        'value' => $this->widget(
                                'TbEditableField',
                                array(
                                    'model' => $model,
                                    'attribute' => 'url',
                                    'url' => $this->createUrl('/program/editableSaver'),
                                ),
                                true
                            )
                    ),
                ),
            )); ?>
    </div>

    <div class="span5">
        <?php $this->renderPartial('_view-relations', array('model' => $model)); ?>    </div>
</div>