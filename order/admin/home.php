
<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Form</title>
    <link rel="stylesheet" href="path/to/your/css/file.css"> <!-- Link to your external CSS file if any -->
    <style>
        /* Internal CSS to center the form and set background color */
        body, html {
            height: 100%;
            margin: 0;
            background-color: white; /* Set background color to white */
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 800px;
        }
        .form-container {
            width: 100%;
            max-width: 1000px; /* Adjust the max-width as needed */
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
    </style>
</head>
<body>

<div>
<?php



?>
</div>


<div class="container" style="margin-top:-150px;">
    <div class="form-container">
        <form action="home.php" method="post">
            <div class="form-row">

               

            </div>
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" id="firstname"  name="firstname" placeholder="First Name" style="background-color: #fff;color:black;" required>
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" style="background-color: #fff;color:black;" required>
            </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" id="username" name="username"   placeholder="Username" style="background-color: #fff;color:black;" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="password"  name="password"  placeholder="password" style="background-color: #fff;color:black;" required>
                </div>


                 <div class="form-group col-md-12" style="text-align: left;">
                    <button type="submit" id="register"  class="btn btn-primary" style="background-color: #00d9a5; border-color: #00d9a5; color: black; margin-top: 30px; width: 250px;color:black;" name="create">Register</button>
                </div>
            </div>
             
                
        </form>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
 $(function(){

     $('#register').click(function(e){

         var valid = this.form.checkValidity(); 

         
         if(valid){

         var firstname =  $('#firstname').val();
         var lastname  =  $('#lastname').val();
         var username  =  $('#username').val();
         var password  =  $('#password').val();

            e.preventDefault();

            $.ajax({
                type:'POST',
                url :'process.php',
                data:{firstname:firstname,lastname:lastname,username:username,password:password},
                success:function(data){

                    Swal.fire({
                    title: "Successfully Done!",
                    text: data,
                    icon: "success"
                     });

                },
                error:function(data){

                    Swal.fire({
                    title: "Error!",
                    text: "Error while saving",
                    icon: "error"
                     });

                }
            });

           
         }else{
           
         }

         


     });

 

 });

</script>
</body>
</html>
