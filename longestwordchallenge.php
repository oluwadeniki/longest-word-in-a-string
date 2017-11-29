<?php
/**Day 1 Challenge
Using your preferred language, have the function LongestWord(sen) take the sen parameter being passed
and return the largest word in the string.
if there are two or more words that are the same length,
return the first word from the string with that length. Ignore punctuation and assume sen will not be empty.

Sample Test Cases
Input:"fun&!! time"
Output:"time"

Input:"I love dogs"
Output:"love" replace 1
 * current 2
 */



function LongestWord($sen) {
    $string1= preg_replace('/[^a-zA-Z0-9 ]/', '', $sen);

    $string1 = explode(" ", $string1);
    $string2 = '';

    for ($i = 0; $i < count($string1); $i++) {
        if (strlen($string1[$i]) > strlen($string2)) {
            $string2 = $string1[$i];
        }
    }

    return $string2;

}

// keep this function call here
echo LongestWord(fgets(fopen('php://stdin', 'r')));

?>

