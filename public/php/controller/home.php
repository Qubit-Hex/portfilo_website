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

 class home extends BaseController {


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
        *   @method: nfld_law_project 
        *
        *  @purpose: to display the projects information 
        *
        */

        public function nfld_law_project()
        {
          return $this->view('header') . $this->view('/components/nfldlaw') . $this->view('footer');
        }

        /**
         * 
         *  @method: cloud_chef_project 
         * 
         * 
         *  @purpose: inprder display the project information 
         * 
         */

         public function cloud_chef_project()
         {
            return $this->view('header') . $this->view('/components/cloudchef') . $this->view('footer');
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


       /**
        *  @method: sendMail
        *
        * @purpose: inorder to send mail to owner of the website incase some one fills out the contact 
        * 
        */  

        public function sendMail()
        {   

            die(json_encode([
               'status' => true,
               'message' => 'mail sent successfully, thank you for contacting me'
            ]));

         }
 }


?>