<?php

    /* 
     *  Class       : Counter
     * 
     *  Description : Simple class allowing you to count by X, get the count value, and reset the value.
     * 
     *  Parameters  : (int) count           - (optional) The starting count value [default: 0]
     *  
     *  Variables   : (private:int) count   - The count value
     * 
     *  Functions
     * 
     *      Function        : (public) count()
     * 
     *          Description : Increment the count value
     *              
     *          Parameters  : (int) n       - (optional) The value to increase the count by [default: 1]
     * 
     *          Return      : NULL
     * 
     *      Function        : (public) get()
     * 
     *          Description : Return the current count value
     *  
     *          Parameters  : [NONE]
     * 
     *          Return      : int
     * 
     *      Function        : (public) reset()
     * 
     *          Description : Reset the count value to 0
     *  
     *          Parameters  : [NONE]
     * 
     *          Return      : NULL
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     * 
     */

    
    class Counter {
     //Set private $count variable to be used throughout the class 
     private $count;

     //The constructor method of the class that takes a parameter called $count (which by default is set to 0)
     public function __construct($count = 0){
          $this->count = $count;
     }

     //The 'count' function that adds the inputted number to the $count variable (or adds 1 if no number was given in the creation of the 'Counter' object)
     public function count($n = 1){
          $this->count += $n;
     }

     //The 'get' function that returns the current value of the '$count' variable
     public function get(){
          return $this->count;
     }

     //The 'reset' function that sets the '$count' variable to 0 
     public function reset(){
          $this->count = 0;
     }


}