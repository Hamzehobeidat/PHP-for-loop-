<?php 
echo "<br><br>";
echo "Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no
hyphen(-) at the starting and ending position.
";
echo "<br><br>";

for($x = 1; $x <= 10; $x++){
    
    if ($x == 10) {
        echo $x;
    }else{
        echo $x . "-";
    }
}
echo "<hr>";
////////////////////////////////////////
echo "<br><br>";
echo " Create a script using a for loop to add all the integers between 0 and 30 and
display the total.";
echo "<br><br>";

$sum = 0;
for($x = 0; $x <= 30; $x++){
   $sum = $sum + $x;
}

echo "The Sum Is = ".$sum;
echo "<hr>";

/////////////////////////////////////////
echo "<br><br>";
echo " Create a script to construct the following pattern, using nested for loop.
";
echo "<br><br>";

// for($i = "A"; $i <= "E"; $i++ ){//i= 1 \ 2
//     for($x = "E"; $x > $i; $x--){//x=5 4 3 2 
//         echo "A";
//     }

//     for($y = "A"; $y <= $i; $y++){//y=1 \ y=1 2
//         echo $i ;
//     }
//     echo "<br>";
// }

// for($x = 'A'; $x <= 'E'; $x++){
//     for($i = 'E'; $i > $x; $i--){
//         echo $x;
//         if($x >$i) {
           
//         // }else {
//         //     echo $i;
//         // }
//     }
//     for($i = 'A'; $i <= $x; $i++){
//         echo $x;
//         if($x <= $i) {
           
//         // }else {
//         //     echo $i;
//         // }
//     }
    
// }
// echo "<br>";
// }
// }
for($i = 65; $i <= 69; $i++ ){//i= 1 \ 2
    for($x = 69; $x > $i; $x--){//x=5 4 3 2 
        echo "A" . " ";
    }

    for($y = 65; $y <= $i; $y++){//y=1 \ y=1 2
        echo chr($i) . " " ;
    }
    echo "<br>";
}

///////////////////////////////////////////////////////
echo "<hr>";


echo "Create a script to construct the following pattern, using nested for loop.";
echo "<br><br>";


for($i = 1; $i <= 5; $i++ ){//i= 1 \ 2
    for($x = 5; $x > $i; $x--){//x=5 4 3 2 
        echo 1 . " ";
    }

    for($y = 1; $y <= $i; $y++){//y=1 \ y=1 2
        echo $i ." " ;
    }
    echo "<br>";
}
echo "<hr>";
/*
i=1
x=5
y=1
11111
i=2
x=5
y=1
11122

*/

///////////////////////////////////////////////////////
echo "<hr>";


echo "Create a script to construct the following pattern, using a nested for loop.";

echo "<br><br>";

for($x = 1; $x <= 5; $x++){
    for($i = 1; $i <= 5; $i++){
        if($x == $i) {
            echo $x;
        }else {
            echo "0";
        }
        
    }
    echo "<br>";
}



///////////////////////////////////////////////////////
echo "<hr>";


echo "Write a program to calculate and print the factorial of a number using a for
loop. The factorial of a number is the product of all integers up to and including
that number, so the factorial of 5 is 5*4*3*2*1= 120.
";

echo "<br><br>";
$fact = 1;
for($x = 5; $x > 1; $x--){
   $fact = $fact * $x;
  
}
echo "The Factorial of 5 is = " . $fact;



///////////////////////////////////////////////////////
echo "<hr>";


echo "6. Write a program to calculate and print the Fibonacci sequence using a for loop.
Fibonacci is a series of numbers where a number is the sum of previous two
numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and
so on.

";
echo "<br><br>";

function fibon($num){
    if($num == 1) {
        return 0 + 1;
    }else {
        for($x = 0; $x < $num; $x++){
            
            return (fibon($num - 1 )+ fibon( $num - 2))  ;
        }

    }
}

$number = 14;
echo fibon($number) . " ";
echo "<br><br>";
// $fib = 0;

/**
 * function Fibonacci($number){ 
      
    // if and else if to generate first two numbers 
    if ($number == 0) 
        return 0;     
    else if ($number == 1) 
        return 1;     
      
    // Recursive Call to get the upcoming numbers 
    else
        return (Fibonacci($number-1) +  
                Fibonacci($number-2)); 
} 
  
// Driver Code 
$number = 10; 
for ($counter = 0; $counter < $number; $counter++){   
    echo Fibonacci($counter),' '; 
}
 */


// $fib = $fib  + 1;
// echo "The Factorial of 5 is = " . $fib;





///////////////////////////////////////////////////////
echo "<hr>";


echo "Write a program which will count the 'c' characters in the text
OrangeAcademy.
";
echo "<br><br>";

$str = "OraccngeAcademyc";


$arr1 = str_split($str);
print_r($arr1);

$ind = $arr1[0];
$sum = 0;
$numElements = count($arr1);
for($i = 0; $i < $numElements; $i++){
    if($arr1[$i] == "c"){
        $sum = $sum + 1;
         
    }
    //  $ind++;
}
echo "<br><br>";
echo "The Number Of c In String = ". $sum . "<br>";
//  echo $ind;

echo "<br><br>";



for($i = 1; $i <=5; $i++) {
    for($x = 1; $x <= $i; $x++){
        echo "*";
    }
    echo  "<br>";
}

echo  "<br>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j >= 1; $j--) {

        if ($i >= $j) {
            echo "*";
        }else {
            echo("&nbsp&nbsp"); 
        }
    }
    echo "<br>";
}

echo "<br>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j >= 1; $j--) {

        if ($i <= $j) {
            echo "*";
        }else {
            echo("&nbsp&nbsp"); 
        }
    }
    echo "<br>";
}

echo "<br>";


?>