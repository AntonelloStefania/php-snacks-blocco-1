<?php
$randomNumArray =[];

while(count($randomNumArray) < 15){
    $randomNum = rand(0,100);
    
    if(!in_array($randomNum, $randomNumArray)){
        $randomNumArray[] = $randomNum;
    }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Numeri random:</h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <ul>
                    <?php foreach($randomNumArray as $randomNum) {?>
                        <li class="my-2">
                            <?php echo $randomNum?>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>