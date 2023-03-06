<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<?php

if(isset($_POST)){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    // echo $name .' '.$email.' '.$phone.' '.$password; 

}
    $chk=[];

    if($name==''){
        $chk['name']='true';
    }
    if($email==''){
        $chk['email']='true';
    }
    if($phone==''){
        $chk['phone']='true';
    }
    if($password==''){
        $chk['password']='true';
    }

    $str='';
    $i=1;
    foreach ($chk as $key => $value) {
        if(count($chk)==$i){
            $str.=$key.'='.$value;
        }else{
            $str.=$key.'='.$value.'&';
        }
        $i+=1;
    }
echo "<script>window.location.assign('form.php?".$str."')</script>";

?>

<a href="form.php">Add Info</a><hr>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php if (isset($_POST)) {echo $name;} ?>
            </td>
            <td>
                <?php if (isset($_POST)) { echo $email; } ?>
            </td>
            <td>
                <?php if (isset($_POST)) { echo $phone;} ?>
            </td>
            <td>
                <?php if (isset($_POST)) { echo $password;} ?>
            </td>
        </tr>
    </tbody>
</table>