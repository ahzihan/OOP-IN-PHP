<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</head>
<body>

    <div class="container mx-auto">
        <div class="row my-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <form action="action.php" method="POST" >
                <div class="mb-3">
                    <label for="Name" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" id="Name">
                    <div id="nameError" class="form-text text-danger"><?php if(isset($_GET['name'])){ echo "Mendatory Field!";} ?></div>
                </div>
                <div class="mb-3">
                    <label for="Phone" class="form-label">Phone Number</label>
                    <input type="text" name="phone" class="form-control" id="Phone">
                    <div id="phoneError" class="form-text text-danger"><?php if(isset($_GET['phone'])){ echo "Mendatory Field!";} ?></div>
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email address</label>
                    <input type="text" name="email" class="form-control" id="Email">
                    <div id="emailError" class="form-text text-danger"><?php if(isset($_GET['email'])){ echo "Mendatory Field!";} ?></div>
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="Password">
                    <div id="passwordError" class="form-text text-danger"><?php if(isset($_GET['password'])){ echo "Mendatory Field!";} ?></div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            <div class="col-md-4"></div>

        </div>
    </div>
    

    <!-- <script>
        function validation(){
            const name=(document.getElementById('Name').value).trim()
            const phone=(document.getElementById('Phone').value).trim()
            const email=(document.getElementById('Email').value).trim()
            const password=(document.getElementById('Password').value).trim()
            if(name=='' || phone=='' || email=='' || password==''){
                if(name==''){
                document.getElementById('Name').className='border border-danger';
                document.getElementById('nameError').innerHTML='Mandetory Field!';
                }else{
                    document.getElementById('Name').className='border border-success';
                    document.getElementById('nameError').innerHTML='';
                }
                if(email==''){
                document.getElementById('Email').className='border border-danger';
                document.getElementById('emailError').innerHTML='Mandetory Field!';
                }else{
                    document.getElementById('Email').className='border border-success';
                    document.getElementById('emailError').innerHTML='';
                }
                if(phone==''){
                document.getElementById('Phone').className='border border-danger';
                document.getElementById('phoneError').innerHTML='Mandetory Field!';
                }else{
                    document.getElementById('Phone').className='border border-success';
                    document.getElementById('phoneError').innerHTML='';
                }
                if(password==''){
                document.getElementById('Password').className='border border-danger';
                document.getElementById('passwordError').innerHTML='Mandetory Field!';
                }else{
                    document.getElementById('Password').className='border border-success';
                    document.getElementById('passwordError').innerHTML='';
                }
                return false;

            }else{
                    document.getElementById('Name').className='border border-success';
                    document.getElementById('nameError').innerHTML='';
                    document.getElementById('Email').className='border border-success';
                    document.getElementById('emailError').innerHTML='';
                    document.getElementById('Phone').className='border border-success';
                    document.getElementById('phoneError').innerHTML='';
                    document.getElementById('Password').className='border border-success';
                    document.getElementById('passwordError').innerHTML='';

                    let isTrue=true;
		            let mailformat = /^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/gm;

                    if(email.match(mailformat)){
                        document.getElementById('emailError').innerHTML=''
                        document.getElementById('Email').className='border border-success'
                    }else{
                        document.getElementById('Email').className='border border-danger'
                        document.getElementById('maiemailErrorl_err').innerHTML='Invalid E-mail'
                        isTrue= false
                    }
                    if(isNaN(phone)){
                        document.getElementById('Phone').className='border border-danger';
                        document.getElementById('phoneError').innerHTML='Must be number only!';
                        isTrue= false
                    }else{
                        document.getElementById('Phone').className='border border-success';
                        document.getElementById('phoneError').innerHTML='';
                    }

                return isTrue;
            }
        }
    </script> -->
    
</body>
</html>