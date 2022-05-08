<?php 

/**
 * 
 *  @class: Web.php
 * 
 * 
 * 
 *  @purpose: inorder to register the routes of the system and serve that resources needded by the page 
 * 
 */

use controller\home;

// include all the files to the routes that we want to register

require_once(__DIR__ . '/web.php');

require_once(__DIR__ . '/controller/home.php');


 class WEB extends Router {


    public function __construct()
    {
        $this->routes = Array();
    }


    /**
     * 
     *  @method: register 
     *  
     *  @purpose: inorder to register the route 
     * 
     */

     public function register($requestType, $class, $method, $name)
     {


        if (Router::getRequestTypeMatch($requestType)) {
            if ($_SERVER['REQUEST_URI'] === $name) {
                return $class->{$method}();
            }
        }

        return $this->appendRoute($class, $method, $requestType, $name);
     }


     /**
      *  @method: autoRun
      *
      *  @purpose: auto run and register all the route plus maintain the state of the object.
      * 
      */

      public function appendRoute($class, $method, $type, $name)
      {
          array_push($this->routes, [
            $name => [
                'route' => $name,
                'class' => $class,
                'method' => $method,
                'requestType' =>  $type]
            ]);


            return $this->routes;
      }

 }








 //------------------------------------- web routes ----------------------------------------------------



$homeRoutes = new home();







Router::serve('GET', $homeRoutes, 'skills', '/skills');
Router::serve('GET', $homeRoutes,  'projects', '/projects');
Router::serve('GET', $homeRoutes, 'contact', '/contact');
Router::serve('GET', $homeRoutes, 'index', '/');


?>