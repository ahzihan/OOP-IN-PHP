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
        <h2>Plain Text To Encrypted Text</h2>
        <form action="encrypt.php" method="post">
            <div class="form-group">
                <textarea class="form-control" name="plainText" placeholder="Plain Text Enter..." id="plainText" style="height: 100px"></textarea>
                <label for="plainText"></label>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-md btn-primary" id="submit" value="Encrypt">
            </div>
        </form>
        <div class="border mt-5 p-4" id="encryptedText"></div>
    </div>



<script>
        $(document).ready(function(){
            $("#submit").click(function(e){
                e.preventDefault();
                let plainText=$("#plainText").val();
                // console.log(plainText);

                $.ajax({
                    url:'encrypt.php',
                    data:{
                        plainText:plainText
                    },
                    type:'POST',
                    success:function(data){
                        if(!data.error){
                            $("#encryptedText").html(data);
                        }
                    }
                });
            });
        });
    </script>



</body>
</html>