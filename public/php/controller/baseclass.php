<?php 



namespace controller;


class baseclass {

    public $views = __DIR__ . '/../view/';


    public function __construct()
    {
           
        $this->request = preg_replace("@[/\\\]@", "", $_SERVER['REQUEST_URI']);

    }


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