<?php
include "connection.php";
$message='';
if(isset($_POST['fullName']) && isset($_POST['roll']) && isset($_POST['dpt']) && !empty($_POST['fullName']) && !empty($_POST['roll']) && !empty($_POST['dpt'])){
    $name=trim($_POST['fullName']);
    $roll=trim($_POST['roll']);
    $dpt=trim($_POST['dpt']);

    $sql="INSERT INTO students(name, roll, dpt) VALUES ('$name','$roll','$dpt')";

    if ($conn->query($sql) === true) {
        header('location: viewStudent.php');
        $_SESSION['message'] = "$fname, Information Inserted successfully!";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }

}

include('header.php');

?>


<?php include 'navbar.php'; ?>
    <section class="row">
        <div class="container">
            <div class="offset-4 col-md-4 shadow-lg p-5 rounded mt-3">
                <h2 class="text-center mb-3">Student Entry</h2>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label"><b>Full Name</b></label>
                        <input type="text" name="fullName" class="form-control" id="name" placeholder="Name..">
                    </div>                    <div class="mb-3">
                        <label for="Roll" class="form-label"><b>Roll</b></label>
                        <input type="text" name="roll" class="form-control" id="roll" placeholder="Roll..">
                    </div>                    <div class="mb-3">
                        <label for="dpt" class="form-label"><b>Department</b></label>
                        <input type="text" name="dpt" class="form-control" id="dpt" placeholder="Dpt..">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?>
