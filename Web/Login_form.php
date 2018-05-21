<?php
   $connect = mysqli_connect('localhost','root','nam','User');
   mysqli_set_charset($connect,"utf8");
   session_start();
 ?>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style>
  /*Login form*/
  form{
    font-family: Raleway;
    border: 3px solid grey;
  }
  body{
    background-image: url("image/16.jpg");
    opacity: 1;
  }
  input[type= text], input[type= password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 16px;
    font-family: Raleway;
  }
  button{
    font-size: 16px;
    background-color: #4caf50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    font-family: Raleway;
  }
  button:hover{
    opacity: 0.8;
  }
  .cancelbt{
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }
  .imgcontainer{
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
  }
  img.avatar{
    width: 40%;
    border-radius: 50%;
  }
  .container{
    padding: 16px;
  }
  span.pass{
    float: right;
    padding-top: 16px;
  }
  @media screen and (max-width: 300px){
    span.pass{
      display: block;
      float: none;
    }
    .cancelbt{
      width: 100%;
    }
  }
  .modal{
    position: absolute;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    padding-top: 60px;
  }
  .modal-content{
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 80%;
  }
  .close{
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
  }
  #signup{
    display: inline;
  }
  .close:hover, .close:focus{
    color: red;
    cursor: pointer;
  }
  .anmate{
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
  }

  @@keyframes animatezoom{
    from{ transform: : scale(0)}
    to { transform: scale(1)}
  }
  @-webkit-keyframes animatezoom{
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
  }

  </style>
</head>
<body>
  <!--Login form-->


  <div id="id01" class="modal">

    <form class="modal-content animate" action="" method="post">
      <div class="imgcontainer">
        <span onclick="window.location.href='inde2.php'" class="close" title="Close Modal">&times;</span>
        <img src="image/img_avatar2.png" class="avatar" alt="Avatar">
      </div>

      <div class="container">
        <label for="uname"> <b>Username</b> </label>
         <input name="uname" type="text" placeholder="Enter your username" >
        <label for="pass"> <b>Password</b> </label>
         <input name="pass" type="password" placeholder="Enter password" >
        <button type="submit" name="dangnhap">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember">Remember me
        </label>
      </div>

      <div class="container" style=" background-color:"lightgrey" ">
        <button type="button" class="cancelbt" id="cancel" onclick=
        "window.location.href='index1.php'">Cancel</button>
        <span class="pass">Forgot<a href="#"> Password?</a></span>
      </div>
    </form>
   <?php
    	if(isset($_POST["dangnhap"])){
       $username = $_POST["uname"];
       $pass = md5($_POST["pass"]);
       $check = mysqli_query($connect,"SELECT * FROM user WHERE pass LIKE '%$pass%' AND user_name LIKE '%$username%' ");
       if (mysqli_num_rows($check) != 1) {
         $notify = "Tài khoản hoặc mật khẩu không chính xác!";
         echo "<script type='text/javascript'> alert('$notify') </script> ";
       }else{
         $name = mysqli_query($connect,"SELECT name FROM user WHERE user_name LIKE '%$username%' ");
         $_SESSION["user-name"] = $_POST["uname"] ;
         header("location:index2.php");
       }
     }
    ?>
  </div>
  <script>

  </script>
</body>
</html>
