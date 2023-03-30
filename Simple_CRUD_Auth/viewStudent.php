<?php

include 'header.php';
if (!empty($_SESSION['message'])) {
    $message = $_SESSION['message'];
}

include 'connection.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

?>

<?php include('navbar.php');?>
<section class="row">
    <div class="container offset-3 col-md-6">
        <h2 class="my-3">All Students</h2>
        <h5 class="text-center"><?php if(isset($_SESSION['message'])){echo $message;}?></h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Department</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if ($result->num_rows > 0) {
                        $sl=1;
                    while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <th scope="row"><?php echo $sl++?></th>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['roll'];?></td>
                    <td><?php echo $row['dpt'];?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-warning btn-sm">Edit</a>
                        <a onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php }}else{ ?>
                  <tr>
                    <th colspan="5">
                        <h3 class="text-center">No Data Found.</h3>
                    </th>
                </tr>  
                <?php }?>
            </tbody>
        </table>
    </div>
</section>
<?php include('footer.php');?>