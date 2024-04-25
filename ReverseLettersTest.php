<?php

require_once 'ReverseLettersTask.php'; 

use PHPUnit\Framework\TestCase;

class ReverseLettersTest extends TestCase
{
    public function testReverseLetters()
    {
        $inputStrings = [
            //"is 'cold' now" => "si 'dloc' won",
            "Cat" => "Tac",
            //"Мышь" => "Ьшым",
            "houSe" => "esuOh",
            //"домИК" => "кимОд",
            "elEpHant" => "tnAhPele",
            "third-part" => "driht-trap",
            //"can`t" => "nac`t",
            "cat," => "tac,",
            //"Зима:" => "Амиз:",
            //"это «Так» \"просто\"" => "отэ «Кат» \"отсорп\""
        ];

        foreach ($inputStrings as $inputString => $expectedOutput) {
            $outputString = reverseLettersInWords($inputString);
            $this->assertEquals(trim($expectedOutput), trim($outputString));
        }
    }
}

