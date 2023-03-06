<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Encrypt</title>
</head>
<body>
    

    <div class="col-md-6 col-lg-6 col-lg-offset-3 mt-5 mx-auto">
        <h2>Decrypted To Encrypted Text</h2>
        <form action="decrypt.php" method="post">
            <div class="form-group">
                <textarea class="form-control" name="decryptText" placeholder="Plain Text Enter..." id="decryptText" style="height: 100px"></textarea>
                <label for="decryptText"></label>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-md btn-primary" id="submit" value="Decrypt">
            </div>
        </form>
        <div class="border mt-5 p-4" id="plainText"></div>
    </div>



<script>
        $(document).ready(function(){
            $("#submit").click(function(e){
                e.preventDefault();
                let decryptText=$("#decryptText").val();

                $.ajax({
                    url:'decrypt.php',
                    data:{
                        decryptText:decryptText
                    },
                    type:'POST',
                    success:function(data){
                        if(!data.error){
                            $("#plainText").html(data);
                        }
                    }
                });
            });
        });
    </script>



</body>
</html>