<?php

    /* 
     *  Function    : containsWord()
     * 
     *  Description : Checks whether a sentence contains a specific word, case insensitive.
     *  
     *  Parameters  : (string) word         - The word to find
     *                (string) sentence     - The sentence to search
     * 
     *  Return      : boolean
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */
    
    
    function containsWord($word, $sentence){
        //Using the 'preg_match' function to search for the subject ($word) for a match to the regular expression given ($sentence), the 'i' modifier to perform case-insensitive matching and finally the 'b' anchor to target the '$word' variable only
        
        if(preg_match("/\b{$word}\b/i", $sentence)){
            return true;
        }
        else{
            return false;
        }

    }