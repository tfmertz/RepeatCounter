<?php

    class RepeatCounter {

        function countRepeats($input_word, $string_to_search) {
            //create a new array of each word from the sentence
            $list_of_words = explode(" ", $string_to_search);

            //make our input string lowercase
            $input_word = strtolower($input_word);

            //create a counter for the num of word matches
            $count = 0;

            //loop through the list of words and find if there's a match
            foreach($list_of_words as $word)
            {
                if($input_word == strtolower($word)) {
                    $count++;
                }
            }

            return $count;
        }

    }

?>
