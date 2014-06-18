<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 13/06/14
 * Time: 5:19 PM
 */

class ActiveDataProvider extends CActiveDataProvider implements AjaxResponseInterface
{
    public function getResponseData()
    {
        $result = [];   // array();

        foreach ($this->getData() as $record) {
            $result[] = $record->getAttributes();
        }

        return $result;
    }

    public function getErrors()
    {
        return [];
    }
} 