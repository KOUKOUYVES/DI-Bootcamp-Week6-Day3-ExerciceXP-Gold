<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body><br><br>
    <h1 style="text-align: center;">ExerciceXP-Gold 2 Motif Utilisant Des Boucles For</h1><br>
    <div class="container">
		
        <?php
            function multiply_two_lists($x, $y)
                {
                  $a = explode(' ',trim($x));
                  $b = explode(' ',trim($y));
                  foreach($a as $key=>$value){
                      $output[$key] = $a[$key]*$b[$key];
                  }
                  return implode(' ',$output);
              }
              echo multiply_two_lists(("20 12 5"), ("1 3 3"))."\n";

        ?>
    </div>
</body>
</html>