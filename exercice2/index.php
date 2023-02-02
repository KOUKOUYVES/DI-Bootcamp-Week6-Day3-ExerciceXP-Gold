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
    <h1 style="text-align: center;">ExerciceXP-Gold 2 Motif Utilisant Des Boucles For</h1>
    <div class="container">
		<div class="form-group">
			<form action="" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Entrer un nombre</label>
            <input type="number" name="values1" class="form-control" />
          </div><br>

          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Entrer un nombre</label>
              <input type="number" name="values2" class="form-control" />
          </div><br>
				<div class="form-group">	
					<input type="submit" name="submit" class="btn btn-primary" value="Submit" />
				</div>	
			</form>
		</div>
        <?php
            if ( isset ($_POST['submit'])) {
              $value1=$_POST['values1'];
              $value2=$_POST['values2'];
               
              if($value1==""|| $value2=="")
              {
                echo 'Veillez renseigner tous les champs svp';
              }else
              {
             
                function multiply_two_lists($multiple1,$multiple2) {
                  $multiple = 0;
                  for ($i = 0; $i < strlen($multiple1); $i++) {
                    for ($j = 0; $j < strlen($multiple2); $j++) {
                      if ($j == $i){
                       $multiple  = $multiple1[$i] * $multiple2[$j];
                      echo $multiple;
                      }
                    }
                   
                  }
              }
              multiply_two_lists(($value1),($value2));
               
            }
            }

        ?>
    </div>
</body>
</html>