<?php

// auto-loading
Yii::setPathOfAlias('Program', dirname(__FILE__));
Yii::import('Program.*');

class Program extends BaseProgram
{

    // Add your model-specific methods here. This file will not be overriden by gtc except you force it.
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function init()
    {
        return parent::init();
    }

    public function getItemLabel()
    {
        return parent::getItemLabel();
    }

    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            array()
        );
    }

    public function rules()
    {
        return array_merge(
            parent::rules(),
            array(
                array('date_utc', 'validateDateUtc'),
            )
        );
    }

    public function validateDateUtc()
    {
        // Store date in UTC
        try {
            $date_utc = $this->parseDateUtc($this->date_utc);
        } catch (Exception $e) {
            $this->addError('date_utc', Yii::t('app', 'Could not parse date'));
        }
        if (!($date_utc instanceof DateTime)) {
            $this->addError('date_utc', Yii::t('app', 'Parsed date not valid')); // TODO: Change to a more descriptive error message
        }
    }

    public function beforeSave()
    {

        // Store date in UTC in a format that MySQL plays along with
        try {
            $date_utc = $this->parseDateUtc($this->date_utc);
            $date_utc->setTimezone(new DateTimeZone('UTC'));
            $this->date_utc = $date_utc->format("Y-m-d H:i:s");
        } catch (Exception $e) {
            $this->date_utc = null;
        }

        return parent::beforeSave();

    }

    protected function parseDateUtc($date_utc)
    {
        // Recognized formats
        $formats = array(
            DateTime::RFC3339,
            "Y-m-d H:i:s",
            "Y-m-d H:i",
        );
        foreach ($formats as $format) {
            $parsed = DateTime::createFromFormat($format, $date_utc, new DateTimeZone('UTC')); // TODO: Check how UTC works as argument when input includes timezone offset
            if (!empty($parsed)) {
                break;
            }
        }
        return $parsed;
    }

    public function search()
    {
        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $this->searchCriteria(),
        ));
    }

}
