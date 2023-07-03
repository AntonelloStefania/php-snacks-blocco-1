<?php
$matches =[
    [
        'teams' => 'Golden State Warriors - Miami Heat',
        'result' => '120 - 105'
    ],
    [
        'teams' => 'Los Angeles Lakers - Brooklyn Nets',
        'result' => '120 - 115'
    ],
    [
        'teams' => 'Boston Celtics - Philadelphia 76ers',
        'result' => '102 - 98'
    ],
    [
        'teams' => 'Houston  Rockets - San Antonio Spurs',
        'result'=> '110 - 108'
    ],
    [
        'teams' => 'Chicago Bulls - Milwaukee Bucks',
        'result'=> '98 - 95' 
    ]
]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>NBA</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <div class="ul list-group">
                    <?php foreach($matches as $match) {?>
                        <li class="list-group-item text-center py-3">
                            <h4>teams:</h4>
                            <?php echo $match['teams'] ?>
                            <h4>results:</h4>
                            <?php echo $match['result'] ?>
                        </li>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
        
</body>
</html>