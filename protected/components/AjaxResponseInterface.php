<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 13/06/14
 * Time: 5:17 PM
 */

interface AjaxResponseInterface {
    public function getResponseData();

    public function getErrors();
}