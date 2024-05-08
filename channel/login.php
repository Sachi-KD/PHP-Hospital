<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/login.css">
        
    <title>Login</title>

    
    
</head>
<body>
<div style="display: flex; justify-content: center; align-items: center;height: 10vh;">
<a href="../index/index.php"  style="text-decoration: none;"> 
<image src="img/logo.png" height="40px" width="300px" style="margin-right:6px; margin-left:28px; margin-top:4px;margin-bottom:12px;">
 </a>
 </div>

    <center>
    <div class="container">
        <table border="0" style="margin: 0;padding: 0;width: 60%;">
            <tr>
                <td>
                    <p class="header-text">Welcome!</p>
                </td>
            </tr>
        <div class="form-body">
            <tr>
                <td>
                    <p class="sub-text">Enter Your Credentials to continue</p>
                </td>
            </tr>
            <tr>
                <form id="login" action="" method="POST" onsubmit="return validateForm()">
                <td class="label-td">
                    <label for="useremail" class="form-label">Email </label>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <input type="email" name="useremail" id="useremail" class="input-text" placeholder="Email Address">
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <label for="userpassword" class="form-label">Password </label>
                </td>
            </tr>

            <tr>
                <td class="label-td">
                    <input type="Password" name="userpassword" id="userpassword" class="input-text" placeholder="Password">
                </td>
            </tr>


            <tr>
                <!-- <td><br>
                <?php echo $error ?>
                </td> -->
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Login" class="login-btn btn-primary btn">
                </td>
            </tr>
        </div>
            <tr>
                <td>
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">Don't have an account&#63; </label>
                    <a href="signup.php" class="hover-link1 non-style-link">Sign Up</a>
                    <br><br><br>
                </td>
            </tr>
                        
                        
    
                        
                    </form>
        </table>

    </div>
</center>

<script src="./script.js"></script>
<script src="sweetalert.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>