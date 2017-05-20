<?php

$tableau1 = array( "t1"=> "");
$tableau2 = array( "t2"=> "");
$tableau3 = array( "t3"=> "");
$tableau4 = array( "t4"=> "");
$tableau5 = array( "t5"=> "");
$tableau6 = array( "t6"=> "");
$tableau7 = array( "t7"=> "");
$tableau8 = array( "t8"=> "");
$tableau9 = array( "t9"=> "");

$numbers = range(1, 9);

shuffle($numbers);
foreach ($numbers as $number) {
    $tableau1['t1'] .= $number ;

}
shuffle($numbers);
foreach ($numbers as $number) {
    $tableau2['t2'] .= $number ;
}

shuffle($numbers);
foreach ($numbers as $number) {
    $tableau3['t3'] .= $number ;
}

shuffle($numbers);
foreach ($numbers as $number) {
    $tableau4['t4'] .= $number ;
}
shuffle($numbers);
foreach ($numbers as $number) {
    $tableau5['t5'] .= $number ;
}

shuffle($numbers);
foreach ($numbers as $number) {
    $tableau6['t6'] .= $number ;
}

shuffle($numbers);
foreach ($numbers as $number) {
    $tableau7['t7'] .= $number ;
}

shuffle($numbers);
foreach ($numbers as $number) {
    $tableau8['t8'] .= $number ;
}

shuffle($numbers);
foreach ($numbers as $number) {
    $tableau9['t9'] .= $number ;
}
print_r($tableau1);
print_r($tableau2);
print_r($tableau3);
print_r($tableau4);
print_r($tableau5);
print_r($tableau6);
print_r($tableau7);
print_r($tableau8);
print_r($tableau9);


// $grand_tableau = array( $tableau1,
//                         $tableau2,
//                         $tableau3,
//                         $tableau4,
//                         $tableau5,
//                         $tableau6,
//                         $tableau7,
//                         $tableau8,
//                         $tableau9);
// $numbers= range(1,9);
// shuffle($numbers);
// foreach ($numbers as $number) {
//     $grand_tableau(["t1"],["t2"],["t3"],["t4"],["t5"],["t6"],["t7"],["t8"],["t9"]).=$number;
//
// }
// $numbers= range(1,9);
// shuffle($numbers);
// foreach ($numbers as $number) {
//     $grand_tableau(["t1"],["t2"],["t3"],["t4"],["t5"],["t6"],["t7"],["t8"],["t9"]).=$number;
//
// }
