<?php

/**
 * 
 *  @file: index.php
 * 
 *  @purpose: This is the main file that will be called by the web server.
 * 
 */

 require(__DIR__ . '/php/router.php');


 class App {

// the default directory for the views of the application 
   private $views = __DIR__ . '/php/view/';


    public function __construct()
    {
        // FILTER SOME OF THE REQUESTS THAT ARE COMING THROUGH TO THE APPLICATION 
        $this->request = preg_replace("@[/\\\]@", "", $_SERVER['REQUEST_URI']);
        $this->post = filter_var_array($_POST);
        $this->get = filter_var_array($_GET);

        $this->rateLimit = 20;
    }


     /**
      *  @method: run 
      *
      *  @purpose: inorder to bootstrap the router in order to serve the static assets 
      *
      */

      public function run()
      {
        // anything special we need todo before loading our application ?
        // put it here 
        setcookie("PROC_INJECTION", bin2hex(random_bytes(64)));
        setcookie("RATE_LIMITER", 0);
        if (isset($_COOKIE['RATE_LIMITER'])) {
            // CHECK IF A MINUTE HAS PASS SINCE OR FIRST REQUEST 
            // AND RESET EVERY MINUTE THIS IS TO PREVENT BOTS FROM 
            // PREFORMING UNAUTHORIZED REQUESTS.
            $_COOKIE['RATE_LIMITER']++;
        }


        
    }

 }






$bootstrap = new App();

// run the application 
return $bootstrap->run();
?>