<?php // COMBAK: Xu li dang nhap ?>
<?php
 $connect = mysqli_connect("localhost","root","nam","User");
 mysqli_set_charset($connect,"utf8");
 ?>
<!DOCTYPE html>
<html>
<title>TEAM 02</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<?php // COMBAK:  ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
    font-family: Raleway;
}
.mem{
  font-family: "Arial",cursive;
  font-size: 20px;
}
#myNavbar{
  background-color: white;
  color: black;
}
/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5, .bgimg-6, .bgimg-7 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('image/bk.gif');
    min-height: 100%;
    opacity: 1;
    size: 70%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("image/11.jpg");
    min-height: 400px
}
.bgimg-4 {
    background-image: url("image/15.jpg");
    min-height: 400px;
}
.bgimg-5 {
    background-image: url("image/6.jpg");
    min-height: 400px;
}
.bgimg-6 {
    background-image: url("image/19.jpg");
    min-height: 400px;
}
.bgimg-7 {
    background-image: url("image/18.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("image/3.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5, .bgimg-6, .bgimg-7 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="index.php" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="Login_form.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> LOGIN</a>
    <a href="SignUp.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> SIGN UP</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">LOGIN</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container " id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xxxlarge w3-wide w3-animate-opacity">TEAM 02 <span class="w3-hide-small"></span></span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT OUR TEAM</h3>
  <p class="w3-center"><em>We love code</em></p>
  <p></p>
  <br >
  <!-- COMBAK: parallax -->
  <div class="bgimg-5 w3-display-container ">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-black w3-wide "></span>
    </div>
  </div>
  <!-- COMBAK: mem 1 -->

  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p class="mem" ><b><i class="fa fa-user w3-margin-right"></i>Nguyễn Danh Nam</b></p><br>
      <img src="image/22.jpg" class="w3-round w3-image  " alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Trưởng nhóm.</p>
      <p>Sinh nhật: 17/06/1998</p>
      <p>Hiện tại đang là sinh viên K61 khoa CNTT đại học Bách Khoa Hà Nội.</p>
      <p>Mail: namnguyen1761998@gmail.com</p>
      <p>SĐT: 01686137754</p>
      <p>Facebook:<a href="https://www.facebook.com/nguyenhuulong.pro">Nam Nguyen</a></p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
  <p class="w3-wide"><i class="fa fa-camera"></i>C/C++</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-pink w3-center" style="width:90%">90%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Web Design</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-blue w3-center" style="width:85%">85%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Java</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-purple w3-center" style="width:75%">75%</div>
  </div>
  <br >
  <!-- COMBAK: parallax -->
  <div class="bgimg-4 w3-display-container ">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-black w3-wide "></span>
    </div>
  </div>
  <!-- COMBAK: mem2 -->
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p class="mem"><b><i class="fa fa-user w3-margin-right"></i>Lưu Công An</b></p><br>
      <img src="image/23.jpg" class="w3-round w3-image " alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Thành viên</p>
      <p>Sinh nhật: </p>
      <p>Đang là sinh viên lớp CN-CNTT 2 khoa CNTT đại học Bách Khoa Hà Nội</p>
      <p>Mail:</p>
      <p>SĐT:</p>
      <p>Facebook:<a href="https://www.facebook.com/an.luu.520125">An Công</a></p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
  <p class="w3-wide"><i class="fa fa-camera"></i>Python</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-pink w3-center" style="width:50%">50%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Java</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-blue w3-center" style="width:90%">90%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Photoshop</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-yellow w3-center" style="width:65%">65%</div>
  </div>
  <br >
  <!-- COMBAK: parallax -->
  <div class="bgimg-6 w3-display-container ">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-black w3-wide "></span>
    </div>
  </div>
  <!-- COMBAK: mem3 -->
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p class="mem"><b><i class="fa fa-user w3-margin-right"></i>Lê Văn Song</b></p><br>
      <img src="image/22.jpg" class="w3-round w3-image " alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Thành viên</p>
      <p>Sinh nhật:21/08/1997</p>
      <p>Đang là sinh viên năm 3 khoa CNTT đại học Bách Khoa Hà Nội</p>
      <p>Mail:songmeoht@gmail.com</p>
      <p>SĐT:01663459577</p>
      <p>Facebook:<a href="https://www.facebook.com/vansong210897">Song Lê</a></p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
  <p class="w3-wide"><i class="fa fa-camera"></i>Photography</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-green w3-center" style="width:90%">90%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>C#</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-red w3-center" style="width:85%">55%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>PHP</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-purple w3-center" style="width:75%">95%</div>
  </div>
  <br >
  <!-- COMBAK: parallax -->
  <div class="bgimg-7 w3-display-container ">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-black w3-wide"></span>
    </div>
  </div>
  <!-- COMBAK: mem4 -->
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p class="mem"><b><i class="fa fa-user w3-margin-right"></i>Hoàng Nông Lương</b></p><br>
      <img src="image/23.jpg" class="w3-round w3-image " alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Thành viên</p>
      <p>Sinh nhật:</p>
      <p>Sinh viên năm 3 khoa CNTT đại học Bách Khoa Hà Nội</p>
      <p>Mail:</p>
      <p>SĐT:</p>
      <p>Facebook: <a href="https://www.facebook.com/efgwswsg">Lương</a></p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
  <p class="w3-wide"><i class="fa fa-camera"></i>Photography</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-blue w3-center" style="width:90%">90%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Web Design</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-orange w3-center" style="width:85%">85%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Photoshop</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-pink w3-center" style="width:75%">75%</div>
  </div>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">14+</span><br>
    Partners
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">55+</span><br>
    Projects Done
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">89+</span><br>
    Happy Clients
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">150+</span><br>
    Meetings
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container ">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">FAVOURITE</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">MY WORK</h3>
  <p class="w3-center"><em> 1 số hình ảnh sưu tầm<br> Click on the images to make them bigger</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="image/kd/132014.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
    </div>

    <div class="w3-col m3">
      <img src="image/kd/203783.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
    </div>

    <div class="w3-col m3">
      <img src="image/kd/288861.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
    </div>

    <div class="w3-col m3">
      <img src="image/kd/442171.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="image/15.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
    </div>

    <div class="w3-col m3">
      <img src="image/16.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
    </div>

    <div class="w3-col m3">
      <img src="image/17.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
    </div>

    <div class="w3-col m3">
      <img src="image/18.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
    </div>
    <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container ">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WHERE I WORK</h3>
  <p class="w3-center"><em>I'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Ha Noi, Viet Nam<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +84 1686137754<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: nam@gmail.com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 ">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official "></i>
    <i class="fa fa-instagram "></i>
    <i class="fa fa-snapchat "></i>
    <i class="fa fa-pinterest-p "></i>
    <i class="fa fa-twitter "></i>
    <i class="fa fa-linkedin "></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(0, 0);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
