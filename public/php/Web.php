<?php 

/**
 * 
 *  @class: Web.php
 * 
 * 
 * 
 *  @purpose: inode to register the routes of the system and serve that resources needed by the page 
 *            this class is responsible to bootstrapping the routes and the views of the application. 
 * 
 * 
 */

namespace Routing;

require_once(__DIR__ . '/hooks.php');
require_once(__DIR__ . '/controller/home.php');



use controller\home;
use Routing\Router;
use Hooks;



 class Web  {


    public $routes = array();
    public $errorRoutes = array();

    public function __construct()
    {
        // load any headers we need to set

        header('X-token:' . hash('sha256', time()));
        
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
    *  @method: handleSingleRoute()
    *
    * @purpose: inorder to handle the single route
    *
    *
    * @parm: the route that we want to handle
    *
    */

    public function handleSingleRoute($url) {
        
        foreach($this->routes as $route)  {
        // remove the slashes from the url\
            $route['name'] = trim($route['name'], '/');
            if ($route['request'] === $_SERVER['REQUEST_METHOD']) {
                if ($url[1] === $route['name']) {
                    $class = new $route['class'];
                    return $class->{$route['method']}();
            }
            }  
        }

        return $this->triggerError();
    }
    /**
     * @method: handleMultipleRoute()
     * 
     * @purpose: in order to handle multiple level routes in order to serve the resources
     *           eg: /someroutes/someResources/
     * 
     *  @parm: the url that we are going to serve
     * 
     */

    public function handleMultipleRoute($url)
    {
        // does our token header exist? 
        
        if (sizeof($url) > 1 ) {
            foreach($this->routes as $route) {
                $route['name'] = explode('/', $route['name']);
                // flatten the array of the url
                foreach ($route['name'] as $key => $value) {
                    if (empty($value)) {
                        unset($route['name'][$key]);
                    }
                }

                // check if the size is equal?
                if (sizeof($url) === sizeof($route['name'])) {
                    // is there any differences of the array?
                    // IF NOT then return the controller object to render the view of the application 
                    if (sizeof(array_diff($url, $route['name'])) === 0) {
                        $class = new $route['class'];
                        return $class->{$route['method']}();
                    } 
                }
            }
       } 

       // return the error page something has went wrong.
       return $this->triggerError();

    }

    /**
     * @method: handleDefaultRoute()
     *  
     * @purpose: in order to handle the default route a.k.a the home page of the application.
     *  
     * @param: $route
     * 
     */

    public function handleDefaultRoute()
    {
        // inorder to handle the single route of the application. 
        foreach($this->routes as $route) {
            // find the route that matches the request
            if ($route['request'] === $_SERVER['REQUEST_METHOD']) {
                // find the route name that matches the request
                if ($route['name'] === '/' || $route['name'] === '') {
                    // render the method of our request 
                    $class = new $route['class'];
                    return $class->{$route['method']}();
                }
            }
        }

        return $this->triggerError();
    }


    /**
     *  
     *  @method: run
     * 
     *  @purpose: to stage run all the required routes for our application 
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
            // check if the url is empty 
            if (empty($url)) {
                return $this->handleDefaultRoute();
            } 
            else if (sizeof($url) === 1) {
                return $this->handleSingleRoute($url);
            } 
            else if (sizeof($url) > 1) {
                return $this->handleMultipleRoute($url);
            }
        }
        
        return $this->triggerError();
    }
    


    /**
     * 
     *  @method; triggerError 
     * 
     *  @purpose: in order to trigger an error if the url is not found
     *  
     */

    public function triggerError()
    {
        // trigger an error if the url is not found
        header('HTTP/1.0 404 Not Found');
        // return the error page
        return require_once(__DIR__ . '/view/error.php');
        exit;
    }
    /**
     * 
     *  @method: routeCreator
     * 
     *  @purpose: inorder to create a new instance of the router class for us to work with. 
     * 
     */

    static function routeCreator() {
        return new Router();
    }


    /**
     * 
     *  @method: PublishRoute
     * 
     *  
     *  @purpose: inorder to publish a new route to the application
     * 
     */

    public function publishRoute($requestType, $class, $method, $name, $hooks = null)
    {
        $interface = $this->routeCreator();

        return array_push($this->routes, $interface->serve($requestType, $class, $method, $name, $hooks));
    }


    /**
     * 
     *  @method: stageRoutes 
     * 
     *  @purpose: inorder ot stage the routes of the application 
     *            and load them into the classes state of the 
     *            application.
     */

     public function stageRoutes() : bool
     {  

        // push all of the routes to our public routes
        // we can just attach any hooks that we want to the router methods for example 
        // array_push($this->routes, $routerInterface->hook('/', 'home', 'index', 'home', new hook()));
        // hooks must be objects instance but are always executed before the routes are executed and therefore

        $this->publishRoute('GET', new home, 'index', '/');
        $this->publishRoute('GET', new home, 'projects', '/projects/');
        $this->publishRoute('GET', new home, 'skills', '/skills/');
        $this->publishRoute('GET', new home, 'contact', '/contact/');
        $this->publishRoute('GET', new home, 'nfld_law_project', '/projects/nfldlaw/');
        $this->publishRoute('GET', new home, 'cloud_chef_project', '/projects/cloudchef/');
        $this->publishRoute('GET', new home, 'index', '/');

        // we wont return the routes to the application
        // since we are just staging the routes for the application
        return true;
     }
 }


?>