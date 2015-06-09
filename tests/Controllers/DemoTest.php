<?php

class DemoControllerTest extends LocalWebTestCase
{

    public function test200(){

        $this->client->get('/demo200/yay');

        $this->assertEquals(200, $this->client->response->getStatus(),'I should 200.');

        // var_dump($this->client->response->getStatus());
        // var_dump($this->client->response->getBody());
    }

    public function test404(){
        $this->client->get('/demo404/boo');

        $this->assertEquals(404, $this->client->response->getStatus(),'I should 404.');

        // var_dump($this->client->response->getStatus());
        // var_dump($this->client->response->getBody());
    }


}