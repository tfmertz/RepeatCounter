# RepeatCounter Specs

##### Spec 1

*Input:* "a", "a"
*Output:* 1
*Spec:* Input two strings with the letter "a" because they match, and the number of times the first "a" is found in the second, or 1

##### Spec 2

*Input:* "a", "a b"
*Output:* 1
*Spec:* Input the word string with "a" and the sentence string with "a b", and find the number of times "a" occurs, which will be 1

##### Spec 3

*Input:* "a", "a a"
*Output:* 2
*Spec:* Input the word "a" and the sentence "a a" because there are 2 matches, find the number of times "a" occurs, which will be 2

##### Spec 4

*Input:* "cat", "cat"
*Output:* 1
*Spec:* Input the word "cat" and the sentence "cat" because the words match, find the number of matches, which is 1

##### Spec 5

*Input:* "cat", "cat dog"
*Output:* 1
*Spec:* Input the word "cat" and the sentence "cat dog", and there should be 1 match for the output

##### Spec 6

*Input:* "cat", "The cat in the hat was a bothersome cat"
*Output:* 2
*Spec:* Input the word "cat" and the sentence "The cat in the hat was a bothersome cat", and find all the matches for the word, which should be two

##### Spec 7

*Input:* "cat", "The cat caT CAT is a very bad cat"
*Output:* 4
*Spec:* Input the word "cat" and the sentence "The cat caT CAT is a very bad cat" because there are case mismatch issues. Out the number of cats regardless of case, which is 4

##### Spec 8

*Input:* "dog", "I love my dog."
*Output:* 1
*Spec* Input the word "dog" and the sentence "I love my dog." because it has a period, find the matches regardless of the period at the end
