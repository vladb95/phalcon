<?php

class IndexController extends BaseController{

	public function indexAction(){
		echo "First application on Phalcon";
	}

	public function testAction($param){
		echo "some text {$param}";
	}

}