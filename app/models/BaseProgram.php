<?php

/**
 * This is the model base class for the table "program".
 *
 * Columns in table "program" available as properties of the model:
 * @property string $id
 * @property string $date_utc
 * @property string $start_time
 * @property string $leadtext
 * @property string $name
 * @property string $b_line
 * @property string $synopsis
 * @property string $url
 *
 * There are no model relations.
 */
abstract class BaseProgram extends ActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'program';
    }

    public function rules()
    {
        return array_merge(
            parent::rules(), array(
                array('date_utc, start_time, leadtext, name, b_line, synopsis, url', 'default', 'setOnEmpty' => true, 'value' => null),
                array('name, b_line', 'length', 'max' => 150),
                array('url', 'length', 'max' => 255),
                array('date_utc, start_time, leadtext, synopsis', 'safe'),
                array('id, date_utc, start_time, leadtext, name, b_line, synopsis, url', 'safe', 'on' => 'search'),
            )
        );
    }

    public function getItemLabel()
    {
        return (string)$this->date_utc;
    }

    public function behaviors()
    {
        return array_merge(
            parent::behaviors(), array(
                'savedRelated' => array(
                    'class' => '\GtcSaveRelationsBehavior'
                )
            )
        );
    }

    public function relations()
    {
        return array_merge(
            parent::relations(), array()
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => Yii::t('model', 'ID'),
            'date_utc' => Yii::t('model', 'Date Utc'),
            'start_time' => Yii::t('model', 'Start Time'),
            'leadtext' => Yii::t('model', 'Leadtext'),
            'name' => Yii::t('model', 'Name'),
            'b_line' => Yii::t('model', 'B Line'),
            'synopsis' => Yii::t('model', 'Synopsis'),
            'url' => Yii::t('model', 'Url'),
        );
    }

    public function searchCriteria($criteria = null)
    {
        if (is_null($criteria)) {
            $criteria = new CDbCriteria;
        }

        $criteria->compare('t.id', $this->id, true);
        $criteria->compare('t.date_utc', $this->date_utc, true);
        $criteria->compare('t.start_time', $this->start_time, true);
        $criteria->compare('t.leadtext', $this->leadtext, true);
        $criteria->compare('t.name', $this->name, true);
        $criteria->compare('t.b_line', $this->b_line, true);
        $criteria->compare('t.synopsis', $this->synopsis, true);
        $criteria->compare('t.url', $this->url, true);


        return $criteria;

    }

}
