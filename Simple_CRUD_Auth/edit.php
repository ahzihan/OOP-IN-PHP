<?php
include "connection.php";
$message = '';

$editID=$_GET['id'];
$sql = "SELECT * FROM students WHERE id='$editID'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while ($data = $result->fetch_assoc()) {
    $id=$data['id'];
    $name=$data['name'];
    $dpt=$data['dpt'];
    $roll=$data['roll'];
}
}

if (isset($_POST['fullName']) && isset($_POST['roll']) && isset($_POST['dpt']) && !empty($_POST['fullName']) && !empty($_POST['roll']) && !empty($_POST['dpt'])) {
    $name = trim($_POST['fullName']);
    $roll = trim($_POST['roll']);
    $dpt = trim($_POST['dpt']);
    $ID = trim($_POST['editID']);

    $sql = "UPDATE students SET name='$name', roll='$roll', dpt='$dpt' WHERE id='$ID'";

    if ($conn->query($sql) === true) {
        header('location: viewStudent.php');
        $_SESSION['message'] = "$name, Information Updated Successfully!";
    } else {
        $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
    }

}


include 'header.php';

?>

<?php include 'navbar.php';?>
    <section class="row">
        <div class="container">
            <div class="offset-3 col-md-6 shadow-lg p-5 rounded">
                <h2 class="text-center mb-3">Update Student Information</h2>
                <form action="" method="POST">
                    <input type="hidden" name="editID" value="<?php if(isset($id)){echo $id;}?>">
                    <div class="mb-3">
                        <label for="name" class="form-label"><b>Full Name</b></label>
                        <input type="text" name="fullName" class="form-control" value="<?php if(isset($name)){echo $name;}?>" id="name" placeholder="Name..">
                    </div>                    <div class="mb-3">
                        <label for="Roll" class="form-label"><b>Roll</b></label>
                        <input type="text" name="roll" class="form-control" value="<?php if(isset($roll)){echo $roll;}?>" id="roll" placeholder="Roll..">
                    </div>
                    <div class="mb-3">
                        <label for="dpt" class="form-label"><b>Department</b></label>
                        <input type="text" name="dpt" class="form-control" value="<?php if(isset($dpt)){echo $dpt;}?>" id="dpt" placeholder="Dpt..">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>

<?php include 'footer.php';?>
