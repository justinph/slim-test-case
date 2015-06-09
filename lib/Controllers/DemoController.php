<?php

namespace APM\Controllers;
use \Slim\Slim;

class DemoController
{

    function __construct() {
        $this->app = Slim::getInstance();
    }

    public function shouldTwoHundred($slug){
        $this->app->response->setBody('Hello world!');
    }

    public function shouldFourOhFour($slug){
        $this->app->notFound();
    }


}