<?php

    require_once 'src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        /*
        Input: "a", "a"
        Output: 1
        Spec: Input two strings with the letter "a" because they match, and the number of times the first "a" is found in the second, or 1
        */

        /*
        Input: "a", "a b"
        Output: 1
        Spec: Input the word string with "a" and the sentence string with "a b", and find the number of times "a" occurs, which will be 1
        */

        /*
        Input: "c", "c c"
        Output: 2
        Spec: Input the word "c" and the sentence "cc" because there are 2 matches, find the number of times "c" occurs, which will be 2
        */

        /*
        Input: "cat", "cat"
        Output: 1
        Spec: Input the word "cat" and the sentence "cat" because the words match, find the number of matches, which is 1
        */

        /*
        Input: "dog", "cat dog"
        Output: 1
        Spec: Input the word "dog" and the sentence "cat dog", and there should be 1 match for the output
        */

        /*
        Input: "frog", "The frog in the hat was a bothersome frog"
        Output: 2
        Spec: Input the word "frog" and the sentence "The frog in the hat was a bothersome frog", and find all the matches for the word, which should be two
        */

        /*
        Input: "dino", "The dino dinO DINO was a very bad dino"
        Output: 4
        Spec: Input the word "dino" and the sentence "The dino dinO DINO was a very bad dino" because there are case mismatch issues. Out the number of "dino" regardless of case, which is 4
        */

        /*
        Input: "puppy", "I love my puppy."
        Output: 1
        Spec Input the word "puppy" and the sentence "I love my puppy." because it has a period, find the matches regardless of the period at the end
        */
    }

 ?>
