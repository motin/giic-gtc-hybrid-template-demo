<?php
$this->setPageTitle(
    Yii::t('model', 'Programs')
    . ' - '
    . Yii::t('crud', 'Manage')
);

$this->breadcrumbs[] = Yii::t('model', 'Programs');
Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
        $('.search-form').toggle();
        return false;
    });
    $('.search-form form').submit(function(){
        $.fn.yiiGridView.update(
            'program-grid',
            {data: $(this).serialize()}
        );
        return false;
    });
    ");
?>

<?php $this->widget("TbBreadcrumbs", array("links" => $this->breadcrumbs)) ?>
    <h1>

        <?php echo Yii::t('model', 'Programs'); ?>
        <small><?php echo Yii::t('crud', 'Manage'); ?></small>

    </h1>


<?php $this->renderPartial("_toolbar", array("model" => $model)); ?>
<?php Yii::beginProfile('Program.view.grid'); ?>


<?php
$this->widget('TbGridView',
    array(
        'id' => 'program-grid',
        'dataProvider' => $model->search(),
        'filter' => $model,
        #'responsiveTable' => true,
        'template' => '{summary}{pager}{items}{pager}',
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
        'columns' => array(
            array(
                'class' => 'CLinkColumn',
                'header' => '',
                'labelExpression' => '$data->itemLabel',
                'urlExpression' => 'Yii::app()->controller->createUrl("view", array("id" => $data["id"]))'
            ),
            array(
                'class' => 'TbEditableColumn',
                'name' => 'id',
                'editable' => array(
                    'url' => $this->createUrl('/program/editableSaver'),
                    //'placement' => 'right',
                )
            ),
            array(
                'class' => 'TbEditableColumn',
                'name' => 'date_utc',
                'editable' => array(
                    'url' => $this->createUrl('/program/editableSaver'),
                    //'placement' => 'right',
                )
            ),
            array(
                'class' => 'TbEditableColumn',
                'name' => 'start_time',
                'editable' => array(
                    'url' => $this->createUrl('/program/editableSaver'),
                    //'placement' => 'right',
                )
            ),
            #'leadtext',
            array(
                'class' => 'TbEditableColumn',
                'name' => 'name',
                'editable' => array(
                    'url' => $this->createUrl('/program/editableSaver'),
                    //'placement' => 'right',
                )
            ),
            array(
                'class' => 'TbEditableColumn',
                'name' => 'b_line',
                'editable' => array(
                    'url' => $this->createUrl('/program/editableSaver'),
                    //'placement' => 'right',
                )
            ),
            #'synopsis',
            array(
                'class' => 'TbEditableColumn',
                'name' => 'url',
                'editable' => array(
                    'url' => $this->createUrl('/program/editableSaver'),
                    //'placement' => 'right',
                )
            ),

            array(
                'class' => 'TbButtonColumn',
                'buttons' => array(
                    'view' => array('visible' => 'Yii::app()->user->checkAccess("Program.View")'),
                    'update' => array('visible' => 'Yii::app()->user->checkAccess("Program.Update")'),
                    'delete' => array('visible' => 'Yii::app()->user->checkAccess("Program.Delete")'),
                ),
                'viewButtonUrl' => 'Yii::app()->controller->createUrl("view", array("id" => $data->id))',
                'updateButtonUrl' => 'Yii::app()->controller->createUrl("update", array("id" => $data->id))',
                'deleteButtonUrl' => 'Yii::app()->controller->createUrl("delete", array("id" => $data->id))',
            ),
        )
    )
);
?>
<?php Yii::endProfile('Program.view.grid'); ?>