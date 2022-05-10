<?php 
/**
 * 
 *  @class: router 
 * 
 *  
 *  @purpose: inorder to route requests based on the request method type 
 * 
 */
namespace Routing;

require_once(__DIR__ . '/Web.php');

use Routing\Web;
use App\Boot;

class Router {


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

    static function serve($requestType, $class, $method, $name, $hooks = null) {
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
            // grab all the methods of a class 
            return [
                'class' => $class,
                'method' => $method,
                'name' => $name,
                'request' => $requestType,
                'hooks' => $hooks
            ];
        }

    /**
     * 
     *  @method: run 
     * 
     *  @purpose: to init the routing application  
     */

     static function run()
     {

        // hooks for the application... 
        $currentApplicationHooks =  [
            // name of the hook => the hook
        ];

        // run all the hooks 
        foreach ($currentApplicationHooks as $hookName => $hook) {
            if ($hook()->run() === false) {
                // return a http_error and stop the application
                return Boot::class::kill();
            }
        }
        // push the request to the web interface. 
        return new  Web;
     }
}

?>