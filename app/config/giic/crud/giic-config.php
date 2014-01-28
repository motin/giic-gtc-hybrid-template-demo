<?php
// GIIC CONFIG FILE
// ----------------

$crudModels = DataModel::crudModels();

// merge
$cruds = array_merge($crudModels);

// init actions
$actions = array();

// generate hybrid CRUDs into application
foreach ($cruds AS $model => $table) {
    $action = array(
        "codeModel" => "FullCrudCode",
        "generator" => 'vendor.phundament.gii-template-collection.fullCrud.FullCrudGenerator',
        "templates" => array(
            'hybrid' => dirname(__FILE__) . '/../../../../vendor/phundament/gii-template-collection/fullCrud/templates/hybrid',
        ),
        "model" => array(
            "model" => "application.models." . $model,
            "controller" => lcfirst($model),
            "template" => "hybrid",
            "internalModels" => array_keys($internalModels),
        )
    );

    if (in_array($model, array(
        "Program",
    ))
    ) {
        $action["model"]["textEditor"] = "html5Editor";
    }

    $actions[] = $action;
}
return array(
    "actions" => $actions
);