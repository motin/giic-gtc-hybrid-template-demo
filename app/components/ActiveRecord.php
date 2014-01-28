<?php

class ActiveRecord extends CActiveRecord
{

    public function behaviors()
    {
        $behaviors = array();

        $restModels = DataModel::restModels();
        if (isset($restModels[get_class($this)])) {
            $behaviors['rest-model-behavior'] = array(
                'class' => 'WRestModelBehavior',
            );
        }

        return $behaviors;
    }

}