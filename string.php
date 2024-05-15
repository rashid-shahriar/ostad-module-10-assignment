<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowelCount = 0;
    $reversedString = "";
    $stringLength = strlen($string);
    for ($i = $stringLength - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }
    for ($i = 0; $i < $stringLength; $i++) {
        if (in_array(strtolower($string[$i]), ["a", "e", "i", "o", "u"])) {
            $vowelCount++;
        }
    }
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n" . "<br>";
}
