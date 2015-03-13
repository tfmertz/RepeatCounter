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
                //check if the last letter of the word is punctuation
                if(fnmatch("[^a-zA-Z]", substr($word, -1)))
                {
                    //take out the punctuation
                    $word = substr($word, 0, -1);
                }

                if($input_word == strtolower($word)) {
                    $count++;
                }
            }

            return $count;
        }

        //NOT USED IN countRepeats FUNCTION AT ALL, PURELY USED FOR TWIG OUTPUT

        //Split a string into an array with punctuation saved as elements
        //input: a string
        //output: an array of strings
        function splitPunctuation($input_string) {

            //put the string into an array word by word including punctuation
            $list_of_words = explode(" ", $input_string);

            //make an empty array to push our words and punctuation to separately
            $words_punctuation_list = array();

            //loop through our words, some may be containing punctuation
            foreach($list_of_words as $word) {

                //check if the last letter of the word is punctuation
                if(fnmatch("[^a-zA-Z]", substr($word, -1)))
                {
                    //push the word to our punctuation array
                    array_push($words_punctuation_list, substr($word, 0, -1));
                    //push the punctuation to our array
                    array_push($words_punctuation_list, substr($word, -1));
                } else {
                    array_push($words_punctuation_list, $word);
                }
            }

            return $words_punctuation_list;

        }

    }

?>
