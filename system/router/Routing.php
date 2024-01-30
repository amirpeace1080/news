<?php
namespace system\router;

use ReflectionMethod;


class Routing{
    private $current_route;

    public function __construct()
    {
       global $current_route;
       
       $this->current_route = explode ("/", $current_route);
// var_dump($this->current_route);
    }

    public function run() {
        // $this-> current_route[0] = "Home";clearstatcache();
        $path = realpath(dirname(__FILE__) . "/../../application/controller/" . $this-> current_route[0]  . ".php");
        // die(dirname(__FILE__) . "/../../application/controller/" . $this-> current_route[0]  . ".php");
         
        // die(dirname(__FILE__) . "./../../application/controller/" . $this-> current_route[0]  . ".php");
       
        if (!file_exists($path)) {
            echo "404 file not found.";
            exit;
        }
        
        sizeof($this->current_route) == 1 ? $method = "index" : $method = $this->current_route[1];

        $class = 'application\controller\\' . $this->current_route[0];
        
        $object = new $class();
        // $method = "index";
        
        
        if(method_exists($object, $method)){
            $reflection = new ReflectionMethod($class, $method);
            $parameterCount = $reflection->getNumberOfParameters();         
                if($parameterCount <= count(array_slice($this->current_route,2) )) {                    
                    call_user_func_array(array($object, $method), array_slice($this->current_route,2));
                }else{
                    echo "404 parameter error.";
                }
        }else{
            echo "404 method not exists.";
        }
    }
}
?>