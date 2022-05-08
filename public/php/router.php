<?php 
/**
 * 
 *  @class: router 
 * 
 *  
 *  @purpose: inorder to route requests based on the request method type 
 * 
 */

require_once( __DIR__ . '/web.php');

class Router {

    // @method: doesClassExist 
    //
    // @purpose: to check if a class exists 


    // strip any unwanted slashes from the request when parsing the request page that will want to see
   // protected $request = $_SERVER['REQUEST_URI'];

    static function doesClassExists($class) {   
        if (is_object($class)) {
            if (get_class($class)) {
                return true;
            }
                return false;
        }
        return false;
    }


    public function index() {}

    public function apples() {}

    /**
     * 
     *  @method: doesMethodExists 
     * 
     *  @purpose: to check if a method exists within our system
     */ 

    static function doesMethodExist($class, $method)
    {
        if (self::doesClassExists($class)) {
            if (method_exists($class, $method)) {
                return true;
            }
            return false;
        }
        return false;
    }

   /**
    *  @method: getRequestTypeMatch
    *
    *  @purpose: to check if the request match the one that we were given. 
    *
    */
    static function getRequestTypeMatch($request) {
        return $_SERVER['REQUEST_METHOD'] === $request ? true : false;
    }

    /**
     * 
     *  @method: serve
     * 
     *  
     *  @purpose: inorder to serve requests  that are being passed to the server
     */

    static function serve($requestType, $class, $method, $name) {
        // we need to following  trigger before lets the request through
        // to the web routes 
    
        // does the name exists and is the class exists ?
        if (!self::doesClassExists($class)) {
            return false;
        }

        // does method exists  and the request type match?
        if (!self::doesMethodExist($class, $method) || !self::getRequestTypeMatch($requestType)) {
            return false;
        }

        // inject a request token to the route'

        $webInterface = new WEB();

        // register the route in the web interface
        return $webInterface->register($requestType, $class, $method, $name);
    }



}








?>