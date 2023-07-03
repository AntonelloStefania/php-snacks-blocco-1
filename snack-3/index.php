<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Post</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="my-5 text-center">Messaggi ricevuti:</h1>
            <div class="col-12 d-flex justify-content-center">
                <ul>
                    <?php  foreach($posts as $index => $post){ ?>
                    <li class="my-5 card  p-4">
                        <?php echo 'ricevuto il:'.' '.$index?>
                        <ul>
                            <?php foreach ($post as $message){?>
                            <li class="my-3 card p-2">
                                <?php echo 'mittente:'.' '.$message['author']?>
                                <br>
                                <?php echo 'messaggio:'.' '.$message['text']?>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
                    
                
                
            </div>
        </div>
    </div>
    
</body>
</html>