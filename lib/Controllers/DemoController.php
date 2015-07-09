<?php

namespace APM\Controllers;
use \Slim\Slim;

class DemoController
{

    function __construct($app) {
        $this->app = $app;
    }

    public function shouldTwoHundred($slug){
        $this->app->response->setBody('Hello world!');
    }

    public function shouldFourOhFour($slug){
        $this->app->notFound();
    }


}