<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ///task1//
    function swap(&$a, &$b) {
        $temp = $a; 
        $a = $b;
        $b = $temp;
    }
    
    
    $x = 12;
    $y = 10;
    
    swap($x, $y); 
    
    echo "x = $x, y = $y"; 
    echo"<br>";
    echo"<hr>";

///task2//
function isArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;
    $numberOfDigits = strlen((string)$number);

    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numberOfDigits);
        $temp = (int)($temp / 10);
    }

    return ($sum == $number);
} 
$number = 407;

if (isArmstrongNumber($number)) {
    echo "$number is an Armstrong Number";
} else {
    echo "$number is not an Armstrong Number";
}
echo"<br>";
echo"<hr>";

//task3//
function isPalindrome($str) {
    $remove=preg_replace("/[^A-Za-z0-9]/","",$str);
    $lowercase=strtolower($remove);
    $reversed = strrev($lowercase);
    if ($lowercase == $reversed) {
        echo"yes,it is a palindrome";
        } else {
            echo"no,it is not a palindrome";
            }
            }
    isPalindrome("Eva, can I see bees in a cave?"); 
    echo"<br>";
    echo"<hr>";

  ///task4//
  function removeDuplicates($array) {
    return array_values(array_unique($array));
}
$array1 = array(2, 4, 7, 4, 8, 4);
print_r(removeDuplicates($array1));
echo"<br>";
echo"<hr>";

///task5//
function reverseString($str) {
    return strrev($str);
}
$str = "remove";
echo reverseString($str);


///task6//echo"<br>";
echo"<hr>";
function isLowerCase($str) {
    if (ctype_lower($str)) {
        return "Your String is Ok";
    } else {
        return "Your String is NOT all lowercase";
    }
}
$str = "remove";
echo isLowerCase($str);
echo"<br>";
echo"<hr>";

///task7//
$inputString = "hello world!";
$uppercaseString = strtoupper($inputString);
$lowercaseString = strtolower($inputString);
$firstLetterUppercaseString = ucfirst($inputString);
$firstLetterEachWordUppercaseString = ucwords($inputString);

echo  $inputString . "<br>";
echo  $uppercaseString ."<br>";
echo  $lowercaseString ."<br>";
echo  $firstLetterUppercaseString . "<br>";
echo  $firstLetterEachWordUppercaseString . "<br>";
echo"<hr>";

///task8//
$numericString = '085119';
$hours = substr($numericString, 0, 2);
$minutes = substr($numericString, 2, 2);
$seconds = substr($numericString, 4, 2);
$Time = $hours . ':' . $minutes . ':' . $seconds;
echo $Time;
echo"<br>";
echo"<hr>";

///task9//
$sentence = "I am a full stack developer at orange coding academy";
$searchWord = "Orange";
$find = strpos($sentence, $searchWord);
if ($find === false) {
    echo "The word  was  found in the sentence.";
    } else {
        echo "The word was not found ";
    }
    echo"<br>";
    echo"<hr>";

///task10//
$url = 'http://www.orange.com/index.php';
$fileName = basename($url);
echo $fileName;
 echo"<br>";
 echo"<hr>";

 ///task11//
 $string1 = 'dragonball';
$string2 = 'dragonboll';
for ($i = 0; $i < strlen($string1) && $i < strlen($string2); $i++) {
    if ($string1[$i] !== $string2[$i]) {
        $position = $i;
        break;
        }
        }
        if ($position === false) {
            echo "The strings are identical.";
            } else {
                echo "The strings are not identical. The first different character is at position $position.";
                }
                echo"<br>";
                echo"<hr>";

///task12//
$char = 'z';
$asciiValue = ord($char);
if ($char == 'z') {
    $nextChar = 'a';
} else {
    
 $nextChar = chr($asciiValue + 1);
}


echo "The next letter after '$char' is '$nextChar'.";
echo"<br>";
echo"<hr>";

///task13//
$originalString = '0000657022.24';
$cleanedString = ltrim($originalString, '0');
echo "Cleaned String: '$cleanedString'";
echo"<br>";
echo"<hr>";


///task14//
$originalString = '\"1+2/3*2:2-3/4*3';
$cleanedString = preg_replace('/[^0-9 ]/', '', $originalString);
echo "Cleaned String: '$cleanedString'";
echo"<br>";
echo"<hr>";


//task15//
$originalString = 'The quick brown fox jumps over the lazy dog';
$trimLength = 25;
$trimmedString = substr($originalString, 0, $trimLength);
echo $trimmedString;
echo"<br>";
echo"<hr>";

 ?>

</body>
</html>