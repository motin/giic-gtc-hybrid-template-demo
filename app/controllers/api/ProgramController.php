<?php

class ProgramController extends AppRestController
{

    protected $_modelName = "Program"; //model to be used as resource

    public function actions() //determine which of the standard actions will support the controller
    {
        return array(
            'list' => array( //use for get list of objects
                'class' => 'WRestListAction',
                'filterBy' => array( //this param user in `where` expression when forming an db query
                    'name_in_table' => 'request_param_name', // 'name_in_table' => 'request_param_name'
                ),
                'limit' => 'limit', //request parameter name, which will contain limit of object
                'page' => 'page', //request parameter name, which will contain requested page num
                'order' => 'order', //request parameter name, which will contain ordering for sort
            ),
            'delete' => 'WRestDeleteAction',
            'get' => 'WRestGetAction',
            'create' => 'WRestCreateAction', //provide 'scenario' param
            'update' => array(
                'class' => 'WRestUpdateAction',
                'scenario' => 'update', //as well as in WRestCreateAction optional param
            )
        );
    }

    public function actionList()
    {

        // Get common criteria used for pagination
        $c = $this->getListCriteria();

        // Collect som metadata about table schema
        $program = $this->getModel();
        $columns = array(
            "program" => array_keys($program->getAllAttributes()),
        );

        // Start building the sql-command
        $command = Yii::app()->db->createCommand()
            ->limit($c->limit)
            ->offset($c->offset)
            ->order($c->order);

        $select = U::prefixed_table_fields_wildcard('program', 'program', $columns['program']);

        // Prevent double-escaping (From Yii docs: "The method will automatically quote the column names unless a column contains some parenthesis (which means the column contains a DB expression).")
        $select .= ", (-1) AS foo";

        $command->select($select);

        $command->from('program');

        $formatResults = function ($records, $columns) {

            //var_dump(compact("records"));
            $rs = array();
            if ($records) {
                foreach ($records as $r) {
                    $result = array();
                    foreach ($columns['program'] as $key) {

                        // Special formatting rules for each column

                        switch ($key) {
                            case "date_utc":
                                $date_utc = Program::parseDateUtc($r["program.$key"]);
                                $result["date"] = $date_utc->format(DateTime::RFC3339);
                                break;
                            case "b_line":
                                $result["b-line"] = $r["program.$key"];
                                break;
                            case "start_time":
                                $start_time = Program::parseTime($r["program.$key"]);
                                $result["start_time"] = $start_time->format("H:i");
                                break;
                            default:
                                $result[$key] = $r["program.$key"];
                        }

                    }
                    $rs[] = $result;
                }
            }
            //var_dump(compact("rs"));
            return $rs;
        };

        $records = $command->queryAll();

        $response = array("programs" => $formatResults($records, $columns));
        //var_dump(compact("response"));

        $options = array("defaultKey" => "program");
        $this->sendResponse(200, $response, $options);
    }

}