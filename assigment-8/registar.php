<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="offset-3 col-md-6">
            <h2 class="text-center">Registration Form</h2>
            <form method="post" action="action.php">
                <label for="name">First Name:</label>
                <input class="form-control" type="text" name="fname"><br>

                <label for="name">Last Name:</label>
                <input class="form-control" type="text" name="lname"><br>

                <label for="email">Email Address:</label>
                <input class="form-control" type="email" name="email" required><br>

                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" required><br>

                <label for="cPassword">Confirm Password:</label>
                <input class="form-control" type="password" name="cPassword"><br>

                <input class="btn btn-md btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>