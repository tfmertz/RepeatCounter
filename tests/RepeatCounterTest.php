<?php

    require_once 'src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        /*
        Input: "a", "a"
        Output: 1
        Spec: Input two strings with the letter "a" because they match, and the number of times the first "a" is found in the second, or 1
        */
        function test_countRepeats_singleLetter()
        {
            $test_RepeatCounter = new RepeatCounter();
            $input1 = "a";
            $input2 = "a";

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(1, $result);
        }

        /*
        Input: "a", "a b"
        Output: 1
        Spec: Input the word string with "a" and the sentence string with "a b", and find the number of times "a" occurs, which will be 1
        */
        function test_countRepeats_twoLetters()
        {
            $test_RepeatCounter = new RepeatCounter();
            $input1 = "a";
            $input2 = "a b";

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(1, $result);
        }

        /*
        Input: "c", "c c"
        Output: 2
        Spec: Input the word "c" and the sentence "cc" because there are 2 matches, find the number of times "c" occurs, which will be 2
        */

        function test_countRepeats_twoLettersSame()
        {
            $test_RepeatCounter = new RepeatCounter();
            $input1 = "c";
            $input2 = "c c";

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(2, $result);
        }

        /*
        Input: "cat", "cat"
        Output: 1
        Spec: Input the word "cat" and the sentence "cat" because the words match, find the number of matches, which is 1
        */

        function test_countRepeats_sameWord()
        {
            $test_RepeatCounter = new RepeatCounter();
            $input1 = "cat";
            $input2 = "cat";

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(1, $result);
        }

        /*
        Input: "dog", "cat dog"
        Output: 1
        Spec: Input the word "dog" and the sentence "cat dog", and there should be 1 match for the output
        */

        function test_countRepeats_twoWordsOneMatch()
        {
            $test_RepeatCounter = new RepeatCounter();
            $input1 = "dog";
            $input2 = "cat dog";

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(1, $result);
        }

        /*
        Input: "frog", "The frog in the hat was a bothersome frog"
        Output: 2
        Spec: Input the word "frog" and the sentence "The frog in the hat was a bothersome frog", and find all the matches for the word, which should be two
        */

        function test_countRepeats_twoWordMatch()
        {
            $test_RepeatCounter = new RepeatCounter();
            $input1 = "frog";
            $input2 = "The frog in the hat was a bothersome frog";

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(2, $result);
        }

        /*
        Input: "dino", "The dino dinO DINO was a very bad dino"
        Output: 4
        Spec: Input the word "dino" and the sentence "The dino dinO DINO was a very bad dino" because there are case mismatch issues. Out the number of "dino" regardless of case, which is 4
        */

        function test_countRepeats_caseMatch()
        {
            $test_RepeatCounter = new RepeatCounter();
            $input1 = "dino";
            $input2 = "The dino dinO DINO was a very bad dino";

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(4, $result);
        }

        /*
        Input: "LiZaRd", "The lizard has a name that was LIZARD"
        Output: 4
        Spec: Input the word "LiZaRd" and the sentence "The lizard had a name that was LIZARD" because there are case mismatch issues. Out the number of "LiZaRd" regardless of case, which is 2
        */

        function test_countRepeats_caseMismatchInput()
        {
            $test_RepeatCounter = new RepeatCounter();
            $input1 = "LiZaRd";
            $input2 = "The lizard has a name that was LIZARD";

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(2, $result);
        }

        /*
        Input: "puppy", "I love my puppy."
        Output: 1
        Spec Input the word "puppy" and the sentence "I love my puppy." because it has a period, find the matches regardless of the period at the end
        */
        function test_countRepeats_endingPeriod()
        {
            $test_RepeatCounter = new RepeatCounter();
            $input1 = "puppy";
            $input2 = "I love my puppy.";

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(1, $result);
        }

        /*
        Input: "bat", "I have a bat, mitt, and hat."
        Output: 1
        Spec: Input the word "bat" and the sentence "I have a bat, mitt, and hat." because it has a list of words separated by a comma, find the matches regardless of any sentence punctuation
        */
        function test_countRepeats_listOfWords()
        {
            $test_RepeatCounter = new RepeatCounter();
            $input1 = "bat";
            $input2 = "I have a bat, mitt, and hat.";

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(1, $result);
        }

        /*
        Input: "I, am"
        Output: ["I", ",", "am"]
        Spec: Input the string "I, am" because it has a comma after a word, and output the array with the comma added ["I", ",", "am"]
        */
        function test_splitPunctuation_onePunctuation()
        {
            $test_RepeatCounter = new RepeatCounter();
            $input1 = "I, am";

            $result = $test_RepeatCounter->splitPunctuation($input1);

            $this->assertEquals(["I", ",", "am"], $result);
        }

        /*
        Input: "I have a red hat, green hat."
        Output: ["I", "have", "a", "red", "hat", ",", "green", "hat", "."]
        Spec: Input the string because it has a comma and period after a word, and output the array with the punctuation added
        */
        function test_splitPunctuation_twoPunctuation()
        {
            $test_RepeatCounter = new RepeatCounter();
            $input1 = "I have a red hat, green hat.";

            $result = $test_RepeatCounter->splitPunctuation($input1);

            $this->assertEquals(["I", "have", "a", "red", "hat", ",", "green", "hat", "."], $result);
        }
    }

 ?>
