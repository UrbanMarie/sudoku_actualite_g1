<?php




$tableau1 = array( "t1"=> "");


$numbers = range(1, 9);

shuffle($numbers);
foreach ($numbers as $number) {
    $tableau1['t1'] .= $number ;
}
shuffle($numbers);
foreach ($numbers as $number) {
    $tableau1['t2'] .= $number ;
}

shuffle($numbers);
foreach ($numbers as $number) {
    $tableau1['t3'] .= $number ;
}

shuffle($numbers);
foreach ($numbers as $number) {
    $tableau1['t4'] .= $number ;
}
shuffle($numbers);
foreach ($numbers as $number) {
    $tableau1['t5'] .= $number ;
}

shuffle($numbers);
foreach ($numbers as $number) {
    $tableau1['t6'] .= $number ;
}

shuffle($numbers);
foreach ($numbers as $number) {
    $tableau1['t7'] .= $number ;
}

shuffle($numbers);
foreach ($numbers as $number) {
    $tableau1['t8'] .= $number ;
}

shuffle($numbers);
foreach ($numbers as $number) {
    $tableau1['t9'] .= $number ;
}
print_r($tableau1);


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
