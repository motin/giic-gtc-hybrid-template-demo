<?php
// GIIC CONFIG FILE
// ----------------

$crudModels = DataModel::crudModels();

// merge
$models = array_merge($crudModels);

// init actions
$actions = array();

// generate default models
foreach ($models AS $model => $table) {
    $actions[] = array(
        "codeModel" => "FullModelCode",
        "generator" => 'vendor.phundament.gii-template-collection.fullModel.FullModelGenerator',
        "templates" => array(
            'default' => dirname(__FILE__) . '/../../../../vendor/phundament/gii-template-collection/fullModel/templates/default',
        ),
        "model" => array(
            "baseClass" => "ActiveRecord",
            "tableName" => $table,
            "modelClass" => $model,
            "modelPath" => "application.models",
            "template" => "default"
        )
    );
}

return array(
    "actions" => $actions
);