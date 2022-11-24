<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post">
        <div class="container">
            <div class="row mb-4 mt-3">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="obreroH" class="form-control" name="obreroH"/>
                        <label class="form-label" for="form3Example1">escriba el valor para proporcionar campos de horas</label>
                    </div>
                </div>
                
            </div>
        </div>
    </form>

    <?php
    if (isset($_POST["obreroH"])) {
        $horas = $_POST["obreroH"];
        for ($i=1; $i <= $horas; $i++) { 
            echo '';
        }
    }
    ?>
</body>

</html>