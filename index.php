<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<?php 
      //question 1  
    $unit=136;
    if($unit<=50){
        $price=$unit*2.5;
    }elseif($unit >=50 && $unit <= 100){
        $price=$unit*5; 
    }elseif($unit >100 && $unit <= 250){
        $price=$unit*6.2; 
    }elseif($unit <= 250){
        $price=$unit*7.5; 
    }
    echo $price;

      //question 2  
      echo '<br>';
    $unit1='/';
    $n1=20;
    $n2=20;
    $result='';

    if($unit1==="+"){
        $operation=$n1+$n2;
    }elseif($unit1 ==="-"){
        $operation=$n1-$n2;
     }elseif($unit1 ==="*"){
        $operation=$n1*$n2;

    }elseif($unit1==="/"){
        $operation=$n1/$n2;

    }
    echo $operation;

    /////////////////////////////////////
    // switch ($operator) {
    //     case "Add":
    //        $result = $n1 + $n2;
    //         break;
    //     case "Subtract":
    //        $result = $n1 - $n2;
    //         break;
    //     case "Multiply":
    //         $result = $n1 * $n2;
    //         break;
    //     case "Divide":
    //         $result = $n1 / $n2;
    // }
    // echo $result;
    
      //question 3  
      echo '<br>';
      $age=25;
      if($age<= 18){
          echo "This person is eligible to vote";
      }else{
        echo "This person is legible to vote";
      }
    
      //question 4  
      echo '<br>';
      $num=0;
      if($num%2==0 && $num!=0){
          echo "This num is even";
      }elseif($num%2!=0){
        echo "This num is odd";
      }elseif($num===0){
        echo "This num is zero";
      }
    ?>
<body>
   

</body>
</html>