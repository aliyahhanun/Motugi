<!DOCTYPE html>
<html>
<head>
    <title>Mutogi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <!-- Menyisipkan Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Menyisipkan Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        .mySlides {display:none;}
        form {
          border: 3px solid #f1f1f1;
          width: 50%;
          height: 65%;
          padding-left: 20px;
          padding-right: 20px;
        }

        /* Full-width inputs */
        input[type=text], input[type=password], input[type=name] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
        }

        /* Add a hover effect for buttons */
        button:hover {
          opacity: 0.8;
        }

        /* Extra style for the cancel button (red) */
        .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
        }

        /* Add padding to containers */
        .container {
          margin-top: 16px;
          padding: 16px;
          z-index: 4;
        }

        /* The "Forgot password" text */
        span.psw {
          float: right;
          padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
            display: block;
            float: none;
          }
          .cancelbtn {
            width: 100%;
          }
        }
    </style>
</head>
<body>       
    <div class="container-fuild" style="background-image: url(assets/img/slide/POSE.jpg);"> 
        <div class="Mutogi">
            <p><b>Mutogi</b>
        </div>
        <form action="signUp.php" method="post" style="z-index: 4; color: white; position: absolute; margin-left: 390px; margin-top: 100px;">          
            <div id="login">SIGN UP</div>
            <div class="name" style="z-index: 5;">
                <label for="nama"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="nama" required>

                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>                

                <label>&nbsp;</label>
                <button type="submit" name="signup" value="signup">Create an Account</button>

                <label style="">Already Have Acoount?<a href="login.php"> Login</a></label>
            </div>
        </form>

        <div class="w3-content w3-section" style="z-index: 2; position: absolute;">
            <img src="assets/img/black.jpg" style="width: 100%; height: 110%; opacity: 0.8; z-index: 3;"> 
        </div>

        <div class="w3-content w3-section" style="margin-top: 80px; background-color: black; z-index: 1; position: relative;">
            <img class="mySlides" src="assets/img/slide/POSE.jpg" style="width:100%">
            <img class="mySlides" src="assets/img/slide/POSE2.jpg" style="width:100%">
        </div>              
    </div>    

    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
</body>
</html>
