<?php


/**
 * 
 *  
 *  @file: home.php
 * 
 *  @purpose: impliments a controller for the web routes that we need to render 
 * 
 */

 namespace controller;

 require_once(__DIR__ . '/baseclass.php');



 class home extends baseclass {


    public function __construct()
    {
      
    }


    /**
     *  
     *  @method: index 
     *  
     *  @purpose: inorder to load the home page of the application
     * 
     */

     public function index()
     {
        // echo "hi";


        return $this->view('header') . $this->view('/components/main') . $this->view('/footer');
     }


     /**
      *  @method: Skills
      *
      *  @purpose: inordeer to render the skills page 
      *
      */


      public function skills()
      {
        return $this->view('header') . $this->view('/components/skills') . $this->view('/footer');
      } 


      /**
       * 
       *  @method" projects
       * 
       *  @purpose: render the view of skills page
       * 
       */

       public function projects()
       {
           return $this->view('header') . $this->view('/components/projects') . $this->view('footer');
       }

       /**
        *  @methos: contact 
        *
        * @purpose: render the view of contact 
        *
        */

       public function contact()
       {
           return $this->view('header') . $this->view('/components/contact') . $this->view('footer');
       }

 }


?>