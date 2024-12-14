<?php
// // no writen with argument or return type with argument -> all sub type of the function
//     function hello($name){
//         for($i=0;$i<=10;$i++){
//             $a[] = $name."<br>"; //define a to array size variable
//         }
//         return $a;
      

//     }

//    print_r(hello('shivam'));
// //    echo hello('rajneesh');
// //     echo hello('rajeev');
// //     echo hello('saurabh');


// addition of two number using paramiter function
// function calculator($a,$b,$c){
//     if($c=='-'){
//         echo $a-$b;
//     }else if($c=='+'){
//         echo $a+$b;
//     }else if($c=='*'){
//         echo $a*$b;
//     }else if($c=='%'){
//         echo $a%$b;
//     }else{
//         echo 'wrong symbol enter by you '. $c;
//     }

// }

// calculator("50",'10', '-');

// echo ord('A'); asci value
// table
// function calculator($a){
//     for($i=1;$i<=10;$i++){
//         echo $a*$i. "<br/>";
//     }
// }

// calculator(2);

// reverse function
function calculator($a){
    for($i=strlen($a)-1;$i>=0;$i--){
        echo $a[$i];
    }
}

calculator("vansh");

?>