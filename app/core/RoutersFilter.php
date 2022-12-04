<?php
namespace app\core;

class RoutersFilter{

    private string $uri;
    private string $method;
    private array $routesRegistered;

    public function __construct(){
        $this->uri = Uri::get();
        $this->method = RequestType::get();
        $this->routesRegistered = Routes::get();

    }
    private function simpleRouter(){
        if( array_key_exists($this->uri, $this->routesRegistered[$this->method] )){
            return $this->routesRegistered[$this->method][$this->uri];
        }
        return 'NotFoundController@index';

    }
    private function dynamicRouter(){

    }
    public function get(){
       return $this->simpleRouter();

    }
}