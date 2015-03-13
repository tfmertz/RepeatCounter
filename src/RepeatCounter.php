<?php

    class RepeatCounter {

        function countRepeats($input_word, $string_to_search) {
            //create a new array of each word from the sentence
            $list_of_words = explode(" ", $string_to_search);

            //loop through the list of words and find if there's a match
            foreach($list_of_words as $word)
            {
                if($input_word == $word) {
                    return 1;
                }
            }
        }

    }

?>
