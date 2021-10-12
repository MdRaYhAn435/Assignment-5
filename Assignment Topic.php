<!Doctype html>
<head>
  <title>
    calculator (9th class)
</title>
</head>
<?php
$result ="";
      if(isset($_POST['operator'])){
      $first_num = $_POST['first_num'];
      $second_num = $_POST['second_num'];
      $third_num = $_POST['third_num'];
      $forth_num = $_POST['forth_num'];
      $fifth_num = $_POST['fifth_num'];
      $sixth_num = $_POST['sixth_num'];
      $seventh_num = $_POST['seventh_num'];
      $eighth_num = $_POST['eighth_num'];
      $operator = $_POST['operator'];
      $matrix_1 = array(
                  array($first_num, $second_num),
                  array($third_num, $forth_num)
      );
      $matrix_2 = array(
                  array($fifth_num, $sixth_num),
                  array($seventh_num, $eighth_num)
      );
      
   if(is_numeric($first_num)&& is_numeric($second_num)&& is_numeric($third_num)
   && is_numeric($forth_num)&& is_numeric($fifth_num)&& is_numeric($sixth_num)
   && is_numeric($seventh_num)&& is_numeric($eighth_num)){
     
      if($operator=="Add"){
        $result = $matrix_1 + $matrix_2;
        #echo $result;
      }
      if($operator=="Sub"){
        $result = $matrix_1 - $matrix_2;
        #echo $result;
      }
      if($operator=="Multi"){
        $result = $matrix_1 * $matrix_2;
        #echo $result;
      } 
        else if($operator=="Add"){
          $result =  $matrix_1 + $matrix_2;
          #echo $result;
        
      }

      else if($operator=="Sub"){
        $result =  $matrix_1 - $matrix_2;
        #echo $result;
      }

      else if($operator=="Multi"){
        $result =  $matrix_1 * $matrix_2;
        #echo $result;
      }
      
    if($operator=="Add"){
      $result =  $matrix_1 + $matrix_2;
      #echo $result;
    }

    if($operator=="Sub"){
      $result =  $matrix_1 - $matrix_2;
      #echo $result;
    }
    
    if($operator=="Multi"){
      $result =  $matrix_1 * $matrix_2;
      #echo $result;
    } 

    else if($operator=="Add"){
      $result = $matrix_1 + $matrix_2;
      #echo $result;
    }
    
    else if($operator=="Sub"){
      $result =  $matrix_1 - $matrix_2;
      #echo $result;
    }


    else if($operator=="Multi"){
      $result = $$matrix_1 * $matrix_2;
      #echo $result;
    }
                else{
              $result =  $matrix_1 / $matrix_2;
              #echo $result;
                
      }
}
      }

?>
<body>
  <h1> Lets Build a Calculator </h1>
  <form method="POST">
    <lable>
      First Number
    </lable>
    <input type= "Number" name="first_num" value="<?php echo $first_num;?>">
    <lable>
      Second Number
    </lable>
    <input type= "Number" name="second_num" value="<?php echo $second_num;?>">
    <lable>
    Third Number
    </lable>
    <input type= "Number" name="third_num" value="<?php echo $third_num;?>">
    <lable>
      Forth Number
    </lable>
    <input type= "Number" name="forth_num" value="<?php echo $forth_num;?>">
    <lable>
    Fifth Number
    </lable>
    <input type= "Number" name="fifth_num" value="<?php echo $fifth_num;?>">
    <lable>
    Sixth Number
    </lable>
    <input type= "Number" name="sixth_num" value="<?php echo $sixth_num;?>">
    <lable>
    Seventh Number
    </lable>
    <input type= "Number" name="seventh_num" value="<?php echo $seventh_num;?>">
    <lable>
    Eighth Number
    </lable>
    <input type= "Number" name="eighth_num" value="<?php echo $eighth_num;?>">
    <lable>
    Result
    </lable>
    <input name="result" value="<?php echo $result; ?>">
    <input type= "submit" value="Add" name="operator">
    <input type= "submit" value="Sub" name="operator">
    <input type= "submit" value="Multi" name="operator">
    
</form>
</body>