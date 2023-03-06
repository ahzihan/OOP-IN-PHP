
<?php
include 'oopClass.php';
global $name;
global $email;
global $person;
global $personName;

if(isset($_POST)){

$name=$_POST['name'];
$email=$_POST['email'];

$person = new Person();
$person->setName($name);
$person->setEmail($email);

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <div class="container">
      <form action="" method="POST">
        <div class="m-3">
          <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Name</label>
          <input type="name" class="form-control" id="" name="name">
        </div>
          <label for="" class="form-label">Email address</label>
          <input name="email" type="email" class="form-control" id="">
        </div>
        <button  type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  
    <div class="container">
      <p></p>
      <p></p>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
