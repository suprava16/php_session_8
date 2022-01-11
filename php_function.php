<?php
// function myFun(){
//   echo "hello from myfun function";
// }
// myFun();


// function show($a,$b){
// echo "sum=",$a+$b;
// }
// show(30,10);

//indexed Array
$arr=[12,30,40,"suprava",39.7,true];

// echo $arr[3];//suprava

// for($i=0;$i<count($arr);$i++){
//   echo $arr[$i]."<br/>";

// }

//for each loop
// foreach($arr as $x){
// echo $x ."<br/>";
// }

//associative array
$arr1=["A"=>"Ram","B"=>"Rima",3=>"Laxman",4=>"Sita"];

// echo $arr1["B"];//rima

foreach($arr1 as $k=>$v){
  echo "$k-$v" ."<br/>";
}

//looping
$a=1;
while($a<=10){
 echo "<ul>"; 
  echo "<li>".$a."</li>";
  $a++;
  echo "</ul>";


}

//do while
$a=1;
do{
 echo "<ul>"; 
  echo "<li>".$a."</li>";
  $a++;
  echo "</ul>";
}while($a<=10);

?>