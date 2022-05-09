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

namespace Routing;

require_once(__DIR__ . '/controller/home.php');

use controller\home;
use Routing\Router;


 class Web  {


    public $routes = array();

    public function __construct()
    {
        // run the web routing 
        $this->run();
    }


    /**
     *  
     *  @method: parseURL
     * 
     *  @purpose: inorder to parse the uri of the application 
     * 
     */

     public function parseURL($string)
     {
         return preg_split('#/#', $string);

     }
    /**
     *  
     *  @method: run
     * 
     *  @purpose: to run all the required routes for our application 
     * 
     */

    public function run()
    {
        // run all the routes of our application 
        if ($this->stageRoutes()) {
           // routes have been stages so lets begin the url parsing inorder to serve the routes 
            $url = $this->parseURL($_SERVER['REQUEST_URI']);

            // flatten the array to remove any empty values
            foreach ($url as $key => $value) {
                // check if the url is empty 
                if (empty($value)) {
                    unset($url[$key]);
                }
            }
 
            var_dump($this->routes);

            if (empty($url)) {
                // if the url request 
                foreach($this->routes as $route) {
                    // find the route that matches the request
                    if ($route['request'] === $_SERVER['REQUEST_METHOD']) {
                        // find the route name that matches the request
                        if ($route['name'] === '/' || $route['name'] === '') {
                            // render the method of our request 
                            $class = new $route['class'];
                            $class->{$route['method']}();
                        }
                    }
                }
            }
        }

        // parse the routes of the application
        foreach($this->routes as $route)  {

        }
    }


    /**
     * 
     *  @method: stageRoutes 
     * 
     *  @prupose: inorder ot stage the routes of the application 
     *            and load them into the classes state of the 
     *            application.
     */

     public function stageRoutes()
     {  
        // push all the routes of our application 
        $routerInterface = new Router();
        // push all of the routes to our public routes
        array_push($this->routes, $routerInterface->serve('GET', new home, 'skills', '/skills/'));
        array_push($this->routes, $routerInterface->serve('GET', new home, 'projects', '/projects/'));
        array_push($this->routes, $routerInterface->serve('GET', new home, 'nfld_law_project', '/projects/nfld_law_project'));
        array_push($this->routes, $routerInterface->serve('GET', new home, 'cloud_chef_project', '/projects/cloud_chef_project'));
        array_push($this->routes, $routerInterface->serve('GET', new home, 'contact', '/contact/'));
        array_push($this->routes, $routerInterface->serve('GET', new home, 'index', '/'));
        // we wont return the routes to the application
        // since we are just staging the routes for the application
        return true;
     }
 }


?>