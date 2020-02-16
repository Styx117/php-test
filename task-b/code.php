<?php

    /* 
     *  Function    : generateSentence()
     * 
     *  Description : Generate a sentence listing out all items provided in an array.
     *  
     *  Parameters  : (string)               start         - The start of the sentence
     *                (array[string])        items         - The list of items
     *                (string/array[string]) append        - (optional) item types to be appended to each item
     * 
     *  Return      : string
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */

    
    function generateSentence($start, $items, $append = null){
        //Define all variables at the top of the function so every if statement scope has access to it
        $suffix;
        $sentence = $start . ": ";
        //Define two variables to store the first and last items in the $items array
        $last = end($items);
        $first = $items[0];

        //if the $append variable is NOT and array, we know that it's a variable and can append it repeatedly to each item in the $item array
        if (!is_array($append)) {
            //If the $append variable is empty, set a varaible to contain no string 
            if ($append == null) 
            {
                $suffix = "";
            }
            else{
                $suffix = " $append";
            }

            //Loop through the items array and append every item to the $sentence string with the suffix from the $append variable
            foreach ($items as $item) {
                //If this is the first item in the array, store it in the sentence variable with no space before it
                if ($item == $first) {
                    $sentence .= $item . "" . $suffix;
                }
                //If this is the last item in the array, prefix it with " and" and add a full stop
                else if ($item == $last) {
                    $sentence .= " and {$item}{$suffix}.";
                }
                //if this is neither the first or last item in the list, simply prefix it with a comma
                else{
                    $sentence .= ", {$item}{$suffix}";
                }
            }
        }
        //if the $append variable IS an array, we know that every item in the $append array needs to be appended to each item in the $items array with the same index
        else{
            //loop through the $items array and append every item to the $sentence string with their respective suffixes from the $append array
           foreach ($items as $item) {
            $index = array_search($item, $items);
            $suffix = $append[$index];
            if ($item == $first) {
                $sentence .= $item . " " . $suffix;
            }
            else if ($item == $last) {
                $sentence .= " and {$item} {$suffix}.";
            }
            else{
                $sentence .= ", {$item} {$suffix}";
            }
        }
    }

    return $sentence;

}