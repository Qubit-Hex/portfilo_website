<?php

/**
 * 
 *  @file: index.php
 * 
 *  @purpose: This is the main file that will be called by the web server.
 * 
 */

namespace App;
require_once(__DIR__ . '/php/router.php');
use Routing\Router;




 class Boot {

// the default directory for the views of the application 
   private $views = __DIR__ . '/php/view/';
   const SERVICE_DIR = __DIR__ . '/php/services/';


    public function __construct()
    {
        // FILTER SOME OF THE REQUESTS THAT ARE COMING THROUGH TO THE APPLICATION 
        $this->request = preg_replace("@[/\\\]@", "", $_SERVER['REQUEST_URI']);
        $this->post = filter_var_array($_POST);
        $this->get = filter_var_array($_GET);

        $this->rateLimit = 20;
    }

    /***
     * 
     *  @method: services 
     * 
     *  @purpose: to initilze any service we want to run 
     * 
     */

     static function services()
     {
         // load any services before the boot operation
         // note: all service must have a mount() method
         // it will be call once the class is initilize upon the array 
         $services = Array(
             // example service
           # 'MAIL' => 'new ExampleService()',

         );

         foreach ($services as $key => $value) {
            // add some error handling the init method.
             self::mountService($value->mount());
         }
         // run the routing operatations
         return Router::class::run();
     }

     /**
      *   @method: mountService 
      *
      *  @purpose: inorder to mount the services that we are going to register to the application 
      *
      */

      static function mountService($serviceClass) {
          return $serviceClass->mount();
      }


     /**
      *  @method: run 
      *
      *  @purpose: inorder to bootstrap the router in order to serve the static assets 
      *
      */

      public function run()
      {
        // Load any services before init the application 

        return self::services();
    }

 }

 $bootstrap = new Boot();


 return $bootstrap->run();


 ?>