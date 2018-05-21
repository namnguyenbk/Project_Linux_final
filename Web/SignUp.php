<?php // COMBAK: Xu li dang nhap ?>
<?php
 $connect = mysqli_connect("localhost","root","nam","User");
 mysqli_set_charset($connect,"utf8");

 ?>
<html>
<head>
  <style>
  input[type=text], input[type=password]{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }
  label{
    font-size: 20px;
  }
  input[type=text]:focus, input[type=password]:focus{
    background-color: #ddd;
    outline: none;
  }
  input{
    font-size: 15px;
  }

  hr{
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }
  body{
    font-family: Raleway;
  }
  button{
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }
  button[ type= button], button[ type= submit]{
    font-size: 15px;
  }

  button:hover{
    opacity: 0.8;
  }
  .modal{
    background-image: url("image/3.jpg");
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    padding-top: 50px;
  }
  .modal-content{
    background-color: #fefefe;
    margin: 10% 10% 10% 10%;
    border: 1px solid #888;
    width: 80%;
  }
  .cancelbt{
    padding: 14px 20px;
    background-color: purple;
  }

  .cancelbt, .signupbt{
    float: left;
    width: 50%;
  }
  .container{
    padding: 16px;
  }
  .clearfix::after{
    content: "";
    clear: both;
    display: table;
  }
  .clearfix{
    margin-left: 2%;
    margin-right: 2%;
  }
  @media screen and (max-width: 300px){
    .cancelbt, .signupbt{
      width: 100%;
    }
  }
  .message{
    display: none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
  }
  .message p{
    font-size: 16px;
    padding: 15px 25px;
  }
  /* COMBAK: When the field was corrected */
  .valid{
    color: green;
  }
  .valid:before{
    content: "✔";
    left: -5px;
    position: relative;
  }
  /* COMBAK: Uncorrect */
  .invalid{
    color: red;
  }
  .invalid:before{
    content: "✖";
    left: -5px;
    position: relative;
  }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>

  <!--Sign Up form-->
  <div id='id01' class="modal">
  <form class="modal-content" action="" method="post">
    <div class="container">
      <h1 style=" color: lightred">Sign Up</h1>
      <p>Please fill in form to create an account.</p>
      <hr >
      <label for="name"><b>Name</b></label>
       <input name="name" type="text" placeholder=
        "Your name" required>
      <label for="username"><b>Username</b></label>
       <input name="username" type="text" placeholder=
        "Username is used when you login" required>
     <label for="contact"><b>Email/ Phone number</b></label>
      <input name="contact" type="text" placeholder=
        "Enter your email or phone number" required>
     <label for="pass"><b>Password</b></label>
      <input name="pass" type="password" placeholder=
        "Enter your password" pattern=
        "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="psw"  required>
        <input type="checkbox" onclick="displayPsw()"  > Show password<br >
        <!-- COMBAK: Box message is displayed when user clicks on the field password -->
        <div id="message">
          <h3>Password must contain the following:</h3>
          <p class="invalid" id="capital"> A uppercase letter</p>
          <p class="invalid" id="letter"> A lowercase letter</p>
          <p class="invalid" id="number"> A number</p>
          <p class="invalid" id="length">Minimum 8 characters</p>
        </div>
     <label for="passrp"><b>Confirm password</b></label>
      <input name="passrp" type="password" id="pass2" placeholder=
      "Repeat password" required>
      <label>
    </div>
        <input type="checkbox" checked="checked" name="remember"
        style=" margin-bottom: 15px; margin-left: 20px;">Remember me
      </label>
      <p>
      By creating an account you agree to our <a href="#" style=
        " color: royalblue">Terms & Privacy</a>
      </p>

      <div class="clearfix">
        <button type="button" class="cancelbt" onclick
        ="window.location.href='index1.php'">Cancel</button>
        <button type="submit" class="signupbt" name="dangky" onclick="">Sign Up</button>

      </div>
    </div>
  </form>
 </div>
 <?php // COMBAK: lay du lieu ?>
 <?php

 		if(isset($_POST["dangky"])){
 			$user_name = $_POST["username"];
 			$pass1 = $_POST["pass"];
 			$pass2 = $_POST["passrp"];
 			$name = $_POST["name"];
      $contact = $_POST["contact"];
      $check1 = mysqli_query($connect,"SELECT user_name FROM user WHERE user_name LIKE '%$user_name%'");
      if (mysqli_num_rows($check1)> 0) {
        // kiem tra ten nguoi dung da co ai dung chua
        $fail1 = "Đăng ký không thành công! Tài khoản đã có người dùng!";
        echo "<script type='text/javascript'> alert('$fail1');</script>";
      } else {
        	//kiểm tra xem 2 mật khẩu có giống nhau hay không:
        if($pass1!=$pass2){
          $fail2 = "Đăng ký không thành công! 2 mật khẩu không khớp";
          echo "<script type='text/javascript'> alert('$fail2');</script>";
   			}
   			else{
   				$pass = md5($pass1);
        //  header("location:index2.php");
   				mysqli_query($connect,"
   					insert into user (user_name,pass,name,contact)
   					values ('$user_name','$pass','$name','$contact')
   				");
          $success = "Đăng ký thành công!";
          echo "<script type='text/javascript'> alert('$success'); window.location.href='index2.php'</script>";
   			}
      }
      // end kiem tra mat khau
 		}
 	?>
 <script>
 function displayPsw() {
   var x = document.getElementById("psw");
   if (x.type === "password") {
     x.type = "text";
   }else{
     x.type = "password";
   }
 }

   var myInput = document.getElementById("psw");
   var letter = document.getElementById("letter");
   var number = document.getElementById("number");
   var capital = document.getElementById("capital");
   var length = document.getElementById("length");
   // When user clicks on the password field, show message checkbox
   myInput.onfocus = function(){
     document.getElementById("message").style.display = "block";
    }
   myInput.onblur = function(){
     document.getElementById("message").style.display = "none";
   }
   myInput.onkeyup = function() {
     // COMBAK: Validate lowercase
     var lowerCase = /[a-z]/g;
     if( myInput.value.match( lowerCase)){
       letter.classList.remove("invalid");
       letter.classList.add("valid");
     }else{
       letter.classList.remove("valid");
       letter.classList.add("invalid");
     }
     // COMBAK: Validate uppercase
     var upperCase = /[A-Z]/g;
     if( myInput.value.match( upperCase)){
       capital.classList.remove("invalid");
       capital.classList.add("valid");
     }else{
       capital.classList.remove("valid");
       capital.classList.add("invalid");
     }
     // COMBAK: Validate number
     var numbers = /[0-9]/g;

     if( myInput.value.match( numbers)){
       number.classList.remove("invalid");
       number.classList.add("valid");
     }else{
       number.classList.remove("valid");
       number.classList.add("invalid");
     }
     if( myInput.value.length >=8){
       length.classList.remove("invalid");
       length.classList.add("valid");
     }else{

       length.classList.remove("valid");
       length.classList.add("invalid");
     }
   }
 </script>
</body>
</html>
