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
    <h1 style="text-align: center;">ExerciceXP-Gold 1 Sum Of The Digits</h1>
    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer un nombre</label>
                <input type="number" name="number" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form><br>

            <?php
                // PHP program to calculate the sum of digits
                function sommeEntierInt($num) {
                    $sum = 0;
                    for ($i = 0; $i < strlen($num); $i++){
                        $sum += $num[$i];
                    }
                    return $sum;
                }

                if(isset($_POST['submit']))
                    {
                        $num = $_POST['number'];

                        echo "la somme des nombres entrés est :" ,sommeEntierInt($num);/// appelle la fonction sommeEntierInt
                    }
            ?>
    </div>
</body>
</html>