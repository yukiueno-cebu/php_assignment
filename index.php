
<?php

// 問題１
$i = 100;
for($i = 100;$i>0; $i--)
{
    echo $i.'<br>';
}
// 問題２
for($i = 1;$i < 10; $i++)
{
    echo $i * 3 .' ';
}
echo"<br>";
// 問題３
for($i = 1; $i < 101; $i++)
{
if( $i % 15 == 0 ){
    echo "FizzBuzz<br>";
}
else if ( $i % 5 == 0){
    echo "Buzz<br>";
}else if ( $i % 3 == 0){
    echo "Fizz<br>";
}
else{
    echo $i . '<br>';
    }
}
echo"<br>";
// 　問題４
 for( $i = 1 ; $i < 101 ;  $i++ ){
    echo $i;
    if($i % 10 == 0){
         echo"<br>";
     }
     }
 echo"<br>";

// // 問題５
$alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];

$aaa = 0 ;


foreach ($alpha as $alphas) {
    if($alphas == 'A'){
        $aaa++;

    }
    
}

echo $aaa;
echo"<br>";


$english = 70;
$math = 70;
$total = $english + $math;

if ($english >= 60 && $math >= 60 && $total >= 140) {
    echo '合格';
} else {
    echo '残念';
}

echo'<br>';

for($ii = 1;$ii < 10; $ii++){
for ($i = 1; $i <10; $i++ ){
    echo $i * $ii;

   

}
echo'<br>';}

// 回答８

    echo "2 3 5 7 ";
    
    for($i = 2; $i < 100; $i++){
    
    if($i % 2 == 0){
        echo " ";
    }else if($i % 3 == 0){
        echo " ";
    }
    else if($i % 5 == 0){
        echo " ";
    }
    else if($i % 7 == 0){
        echo " ";
    }else{
        echo $i;
    }

}
