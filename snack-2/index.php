<?php
    $results = true;
    $show = false;
if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];
    $show = true;
  

    if ((strlen($name) > 3) && strpos($email, '@') && strpos($email, '.') && is_numeric($age) ) {
        $results = false; 
    }
  

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4 my-5 card">
                <form action="index.php" method="GET">
                    <div class="form-group my-3">
                        <label >Name</label>
                        <input type="text" class="form-control"   placeholder="Enter your name" name="name">
                    </div>
                    <div class="form-group my-3">
                        <label >Email address</label>
                        <input name="email" type="email" class="form-control"  placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group my-3">
                        <label class="ps-1">Age</label>
                        <input name="age" type="text" class="form-control" id="exampleInputPassword1" placeholder="insert your age">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary my-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center ">

            <div class="col-3 offset-5 m-3">
                <div class="<?php echo $show == true ? 'd-block py-3 text-center card' : 'd-none' ?>">
                    <?php echo ($results == false) ? 'Accesso Consentito!!!' : 'Accesso Negato'
                    ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>