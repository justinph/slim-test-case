<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


use There4\Slim\Test\WebTestCase;

define('APP_ROOT', realpath(dirname(__FILE__) . '/'));

require '../vendor/autoload.php';

// Initialize our own copy of the slim application
class LocalWebTestCase extends WebTestCase {
    
    public function getSlimInstance() {
      
        $_ENV['SLIM_MODE'] = 'cli';

        $app = new \Slim\Slim(array(
            'log.enabled' => false,
            'debug' => true,
            'site.title' => 'APM Slim Base CLI',
            'site.title.short' => 'Slim Base',    
            'mode' => 'cli',
        ));     

        $app->curl = function ($c) use ($app) {
            return new \Curl();
        };


        $demoController = new \APM\Controllers\DemoController($app);

        $app->get('/demo200(/:slug+)', function ($slug) use ($app, $demoController) {
            $demoController->shouldTwoHundred($slug);
        });
        $app->get('/demo404(/:slug+)', function ($slug) use ($app, $demoController) {
            $demoController->shouldFourOhFour($slug);
        });

        error_reporting(E_ALL);
        return $app;
    }
};
