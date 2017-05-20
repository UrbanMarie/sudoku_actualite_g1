<?php
// 862491573
// 429617538
// 861952347
// 398214765
// 216934578
// 763812495
// 192638754
// 714283659
// 594186723


$grand_tableau = [];
$tableau1 = array( "l1"=> "");
$tableau2 = array( "l2"=> "");
$numbers = range(1, 9);
$numbs = range(1, 9);

shuffle($numbers);
foreach ($numbers as $number) {
    $tableau1['l1'] .= $number ;
  }
  shuffle($numbs);
foreach ($numbs as $numb) {

    $tableau2['l2'] .= $numb ;
  }
    // $tableau3['l1'] .= $number ;
    // $tableau4['l1'] .= $number ;
    // $tableau5['l1'] .= $number ;
    // $tableau6['l1'] .= $number ;
    // $tableau7['l1'] .= $number ;
    // $tableau8['l1'] .= $number ;
    // $tableau9['l1'] .= $number ;

//$tableau2, $tableau3, $tableau4, $tableau5, $tableau6, $tableau7, $tableau8, $tableau9;
//print_r($tableau1);
//print_r($tableau2);

$grand_tableau = array(
$tableau1= array("t1"=>""),
$tableau2= array("t2"=>""),
// $tableau3= array("t3"=>""),
// $tableau4= array("t4"=>""),
// $tableau5= array("t5"=>""),
// $tableau6= array("t6"=>""),
// $tableau7= array("t7"=>""),
// $tableau8= array("t8"=>""),
// $tableau9= array("t9"=>"")
);
print_r($grand_tableau);
// $grand_tableau = array("t1"=>"",
                      //  "t2"=>"",
                      //  "t3"=>"",
                      //  "t4"=>"",
                      //  "t5"=>"",
                      //  "t6"=>"",
                      //  "t7"=>"",
                      //  "t8"=>"",
                      //  "t9"=>"");
$numbers= range(1,9);
shuffle($numbers);
foreach ($numbers as $number) {
    $grand_tableau = [["t1"],["t2"],["t3"],["t4"],["t5"],["t6"],["t7"],["t8"],["t9"]];//.=$number;

}
print_r($tableau1);
