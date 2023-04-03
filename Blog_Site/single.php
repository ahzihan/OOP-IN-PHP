<?php
include './include/header.php';

include "./include/connection.php";
$id=$_GET['id'];
$sql = "SELECT * FROM `tbl_blog` WHERE id='$id'";
$result = $conn->query($sql);

?>


<?php include './include/navbar.php';?>
<section class="row">
    <div class="container offset-2 col-md-8">
        <h2 class="my-3">Blog</h2>
        <div class="flex justify-item-center">
            <?php
if ($result->num_rows > 0) {
    $sl = 1;
    while ($row = $result->fetch_assoc()) {
        ?>
            <div class="card mb-3">
                <img class="card-img-top" style="height:400px;width:100%;" src="img/<?php echo $row["image"]; ?>" alt="">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $row['title']; ?>
                    </h5>
                    <p class="card-text"><?php echo $row['description']; ?></p>
                    <p class="card-text"><small class="text-muted"></small></p>
                </div>
            </div>
        </div>
        <?php }} else {?>
        <div class="card mb-3"><b>No Data Fount</b></div>
        <?php }?>
    </div>
</section>
<?php include './include/footer.php';?>