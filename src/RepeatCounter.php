<?php

    class RepeatCounter {

        function countRepeats($input_word, $string_to_search) {

            //pass splitPunctuation on the string so we are returned an array
            //with words and trailing punctation separately
            $list_of_words = $this->splitPunctuation($string_to_search);

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

        //Split a string into an array with punctuation saved as elements
        //Ex input: a string "I, am."
        //Ex output: an array of strings ["I", ",", "am", "."]

        //Solves the problem of not being able to highlight word matches
        //in twig if they are followed by trailing punctuation
        //Ex. "dog," or "dog." or "dog!"
        function splitPunctuation($input_string) {

            //put the string into an array word by word
            $list_of_words = explode(" ", $input_string);

            //make an empty array to push our words and punctuation to separately
            $words_punctuation_list = array();

            //loop through our words, some may contain punctuation
            foreach($list_of_words as $word) {

                //check if the last letter of the word is punctuation
                if(fnmatch("[^a-zA-Z]", substr($word, -1)))
                {
                    //push the word to our punctuation array
                    array_push($words_punctuation_list, substr($word, 0, -1));
                    //push the punctuation to our array
                    array_push($words_punctuation_list, substr($word, -1));
                } else {
                    //just push the word
                    array_push($words_punctuation_list, $word);
                }
            }

            return $words_punctuation_list;

        }

    }

?>
