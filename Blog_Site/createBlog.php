<?php
include "./include/connection.php";


$message = '';
if (isset($_POST["submit"])) {
    if(isset($_POST['title']) && isset($_POST['description'])){
        $title= $_POST['title'];
        $description= $_POST['description'];

        $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        $rand = rand(100000, 999999);
        $photoName = $rand . '.' . $ext;
        move_uploaded_file($_FILES["image"]["tmp_name"], "img/" . $photoName);

        $sql = "INSERT INTO tbl_blog (title, description, image) VALUES ('$title','$description','$photoName')";

        if ($conn->query($sql) === true) {
            $_SESSION['message'] = "Post Inserted Successfully!";
            header('location: index.php');
        } else {
            $message = "Error: " . $sql . "<br>" . $conn->error;
        }

    }
}

include './include/header.php';
include './include/navbar.php';

?>

    <section class="row">
        <div class="container">
            <div class="offset-3 col-md-6 shadow-lg p-5 rounded mt-3">
                <h2 class="text-center mb-3">Create Post</h2>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label"><b>Title</b></label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title..">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label"><b>Description</b></label>
                        <textarea name="description" class="form-control" id="description" placeholder="Description.." cols="30" rows="7"></textarea>
                    </div>                    
                    <div class="mb-3">
                        <label for="image" class="form-label"><b>Image</b></label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

<?php include './include/footer.php';?>
