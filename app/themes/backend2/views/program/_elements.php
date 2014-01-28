<div class="row">
    <div class="span8"> <!-- main inputs -->

        <div class="form-horizontal">

            <?php echo $form->textFieldRow($model, 'date_umt'); ?>

            <?php echo $form->textFieldRow($model, 'start_time'); ?>

            <?php echo $form->textAreaRow($model, 'leadtext', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

            <?php echo $form->textFieldRow($model, 'name', array('maxlength' => 150)); ?>

            <?php echo $form->textFieldRow($model, 'b_line', array('maxlength' => 150)); ?>

            <?php echo $form->textAreaRow($model, 'synopsis', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

            <?php echo $form->textFieldRow($model, 'url', array('maxlength' => 255)); ?>
        </div>
    </div>
    <!-- main inputs -->

    <div class="span4"> <!-- sub inputs -->

    </div>
    <!-- sub inputs -->
</div>
