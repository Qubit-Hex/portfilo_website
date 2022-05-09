<?php 



namespace controller;


/**
 * 
 *  @function: BaseController 
 * 
 *  @purpose: in order to provide controller functionality to the application 
 * 
 */ 


class BaseController {

    public $views = __DIR__ . '/../view/';


    public function __construct()
    {
        // load the request URI
        $this->request = preg_replace("@[/\\\]@", "", $_SERVER['REQUEST_URI']);

    }

    /**
     * 
     *  @method: view 
     * 
     *  @purpose: inorder to load the view file of the application
     */

    public function view($file){

        if ($this->doesViewExists($this->views . $file . '.php') === true) {
            return $this->doesViewExists($this->views . $file . '.php');
        }

        return include_once($this->views . $file . '.php');

    }

    
     /**
      *
      *  @public: doesViewExists 
      * 
      * @purpose: check if a view file exists ?
      */

      public function doesViewExists($file)
      {
        if (file_exists($this->views . $file)) {
            return true;
        }
            return false;
        
      }

}


?>