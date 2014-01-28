<?php

class AppRestController extends WRestController
{

    public $layout = '//layouts/empty';

    public function init()
    {
        ini_set('html_errors', 0);
        $this->_responseFormat = 'xml';
        return parent::init();
    }

    public $page = 'page';
    public $limit = 'limit';
    public $offset = 'offset';
    public $order = 'order';
    public $defaultLimit = 10;

    protected function getListCriteria()
    {

        $c = new CDbCriteria();
        $model = $this->getModel();

        $actions = $this->actions();
        $params = $actions["list"];

        $filterBy = $params["filterBy"];
        $paramsList = $model->getCreateAttributes();

        foreach ($paramsList as $columnName) {
            if (isset($filterBy[$columnName])) {
                $c->compare($columnName, $filterBy[$columnName]);
            }
        }

        // Make sure the filter parameters are allowed for rest-filtering
        if (!empty($filterBy) && is_array($filterBy)) {
            foreach ($filterBy as $name_in_table => $request_param_name) {
                if (!is_null(Yii::app()->request->getParam($request_param_name))) {
                    $c->compare($name_in_table, Yii::app()->request->getParam($request_param_name));
                }
            }
        }

        $c->limit = (int) (($limit = Yii::app()->request->getParam($this->limit)) ? $limit : $this->defaultLimit);
        $page = (int) Yii::app()->request->getParam($this->page) - 1;
        $c->offset = ($offset = $limit * $page) ? $offset : 0;
        $c->order = ($order = Yii::app()->request->getParam($this->order)) ? $order : $model->tableName(
            ) . "." . $model->getMetaData()->tableSchema->primaryKey;

        $reverse = Yii::app()->request->getParam('reverse');
        if ($reverse == 1) {
            $c->order .= " DESC";
        } else {
            $c->order .= " ASC";
        }

        return $c;
    }

}