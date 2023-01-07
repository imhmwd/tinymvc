<?php

namespace System\router;

use ReflectionMethod;

class Routing
{
    private $current_route;
    private $method;
    private $class;

    public function __construct()
    {
        global $current_route;
        $this->current_route = explode('/', $current_route);
    }

    public function run()
    {
        $path = realpath(dirname(__FILE__) . "/../../application/controller/" . $this->current_route[0] . ".php");

        if (!file_exists($path)) {
            echo "404";
            exit;
        }

        sizeof($this->current_route) == 1 ? $this->method == "index" : $this->method == $this->current_route[1];

        $this->class = "Application\contoller\\" . $this->current_route[0];
        $object = new $this->class();

        if (method_exists($object, $this->method)) {

            $reflection = new ReflectionMethod($this->class, $this->method);
            $parameterCount = $reflection->getNumberOfParameters();
            if ($parameterCount <= count(array_slice($this->current_route, 2))) {
                call_user_func_array(array($object, $this->method), array(array_slice($this->current_route, 2)));
            } else {
                echo "parameter error";
            }

        } else {
            echo "method not exist";
        }

    }

}