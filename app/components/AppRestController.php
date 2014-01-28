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

}