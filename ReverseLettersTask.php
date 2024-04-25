<?php

function reverseLettersInWords($inputString) {
    preg_match_all('/\b[\w\']+\b|[\p{P}]/u', $inputString, $matches);

    $result = [];

    foreach ($matches[0] as $word) {
        if (preg_match('/^\pL+$/u', $word)) {
            $reversedWord = '';
            $letters = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);
            $reversedLetters = array_reverse($letters);

            foreach ($letters as $index => $letter) {
                if (ctype_upper($letter)) {
                    $reversedWord .= mb_strtoupper($reversedLetters[$index]);
                } else {
                    $reversedWord .= mb_strtolower($reversedLetters[$index]);
                }
            }

            $result[] = $reversedWord;
        } else {
            $result[] = $word;
        }
    }

    $outputString = implode('', $result);

    return $outputString;
}
