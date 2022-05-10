 <?php 


/***
 * 
 *  @class: hooks.php
 * 
 *  @purpose: to provide hooks functionality to the application, before letting any request through
 *  
 */



 abstract class Hooks {


    /**
     * @method: run
     * 
     * 
     * @purpose: to run the hook
     * 
     */ 

    abstract public function run();


    /**
     * 
     *  @method: ifHookFailed
     * 
     *  @purpose: inorder to return an error denying access to the system if the hooks failed upon the user 
     * 
     */

     abstract public function failed();



     /**
      *  @method: success
      *
      *  @purpose: inorder to return a success message if the hook is successful
      */

    abstract public function success();

 }

?>