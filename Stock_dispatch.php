<!doctype html>
<html lang="en">

<?php
if(isset($_POST['stockidtxbx'])){
 $rollno = $_POST['stockidtxbx'];
 echo "hell333o";
 }
 ?>
<head>
  <!-- Required meta tags -->
  <script src=
  "https://code.jquery.com/jquery-3.2.1.min.js">
</script>
<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        type="text/javascript">
    </script>
      
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
    .site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
  </style>


</head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Store Management System</title>
  <link rel="icon" type="image/x-icon" href="assets/images/faviocn.png">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body class="sidebar-menu-collapsed">
<div class="se-pre-con"></div>
<section>
  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
      <h1><a href="index.html">SVREC</a></h1>
    </div>

  <!-- if logo is image enable this -->
    <!-- image logo --
    <div class="logo">
      <a href="index.html">
      </a>
    </div>
    <!-- //image logo -->

    <div class="logo-icon text-center">
      <a href="index.html" title="logo"><img src="assets/images/logo.png" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li><a href="index.html"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
        </li>
        
        <li><a href="stock_entry_reg.html"><i class="fa fa-archive"></i> <span>Stock Entry Register</span></a></li>
        <li class="active"><a href="Stock_dispatch.php"><i class="fa fa-dropbox"></i> <span>Stock Dispatch Register</span></a></li>
        <li><a href="search.php"><i class="fa fa-search"></i> <span>Search</span></a></li>
        <!--li><a href="forms.html"><i class="fa fa-file-text"></i> <span>Forms</span></a></li-->
      </ul>
      <!-- //sidebar nav end -->
      <!-- toggle button start -->
      <a class="toggle-btn">
        <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
        <i class="fa fa-angle-double-right menu-collapsed__right"></i>
      </a>
      <!-- //toggle button end -->
    </div>
  </div>
  <!-- //sidebar menu end -->
  <!-- header-starts -->
  <div class="header sticky-header">

    <!-- notification menu start -->
    <div class="menu-right">
      <div class="navbar user-panel-top">
        <!--div class="search-box">
            <input class="search-input" placeholder="Search Here..." type="search" id="search">
            // <button type="submit" class="btn btn-primary btn-style mt-4"> <i class="fa fa-search" style="font-size: 120%;"></i>Search</button> 
        </div-->
        <div class="user-dropdown-details d-flex">
          <div class="profile_details_left">
            <ul class="nofitications-dropdown">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-bell-o"></i><span class="badge blue"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="notification_header">
                      <!--h3>You have 3 new notifications</h3-->
                    </div>
                  </li>
                  <li><a href="#" class="grid">
                      <!--div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div-->
                      <div class="notification_desc">
                        <!--p>Johnson purchased template</p>
                        <span>Just Now</span-->
                      </div>
                    </a></li>
                  <li class="odd"><a href="#" class="grid">
                      <!--div class="user_img"><img src="assets/images/avatar2.jpg" alt=""></div-->
                      <div class="notification_desc">
                        <!--p>New customer registered </p>
                        <span>1 hour ago</span-->
                      </div>
                    </a></li>
                  <li><a href="#" class="grid">
                      <!--div class="user_img"><img src="assets/images/avatar3.jpg" alt=""></div-->
                      <div class="notification_desc">
                        <!--p>Lorem ipsum dolor sit amet </p>
                        <span>2 hours ago</span-->
                      </div>
                    </a></li>
                  <li>
                    <div class="notification_bottom">
                      <a href="#all" class="bg-primary">See all notifications</a>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-comment-o"></i><span class="badge blue"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="notification_header">
                      <h3></h3>
                    </div>
                  </li>
                  <li><a href="#" class="grid">
                      <!--div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div-->
                      <div class="notification_desc">
                        <p></p>
                        <span></span>
                      </div>
                    </a></li>
                  <li class="odd"><a href="#" class="grid">
                      <!--div class="user_img"><img src="assets/images/avatar2.jpg" alt=""></div-->
                      <div class="notification_desc">
                        <p> </p>
                        <span></span>
                      </div>
                    </a></li>
                  <li><a href="#" class="grid">
                      <!--div class="user_img"><img src="assets/images/avatar3.jpg" alt=""></div-->
                      <div class="notification_desc">
                        <p> </p>
                        <span></span>
                      </div>
                    </a></li>
                  <li><a href="#" class="grid">
                      <!--div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div-->
                      <div class="notification_desc">
                        <p></p>
                        <span></span>
                      </div>
                    </a></li>
                  <li>
                    <div class="notification_bottom">
                      <a href="#all" class="bg-primary">See all messages</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="profile_details">
            <ul>
              <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                  aria-expanded="false">
                  <div class="profile_img">
                    <img src="assets/images/svr.jpg" class="rounded-circle" alt="" />
                    <div class="user-active">
                      <span></span>
                    </div>
                  </div>
                </a>
                <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                  <li class="user-info">
                    <h5 class="user-name">SVREC</h5>
                    <span class="status ml-2">Store Management</span>
                  </li>
                  <li> <a href="http://www.svrec.ac.in"><i class="fa fa-user-circle-o"></i>Profile</a> </li>
                  <!--li> <a href="#"><i class="lnr lnr-users"></i>1k Followers</a> </li>
                  <li> <a href="#"><i class="lnr lnr-cog"></i>Setting</a> </li>
                  <li> <a href="#"><i class="lnr lnr-heart"></i>100 Likes</a> </li-->
                  <li class="logout"> <a href="login.php"><i class="fa fa-power-off"></i> Logout</a> </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <notification menu end>
  </div>
  <!-- //header-ends -->
<!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Stock_Dispatch  </li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- pricing -->
    <section class="pricing">
      <div class="card card_border mb-5">
        <div class="cards__heading">
          <h3>Stock Dispatch<span> Register</span></h3>
        </div>
        <div class="card-body">
          <!-- pricing version 1 -->

          <!--//BLOCK ROW END-->

          <section class="w3l-pricing1">
            <div class="row px-2">
              <div class="col-md-12 px-2">
                <div class="mb-4 price-card price-card1 p-lg-4 p-md-3 p-4">
                  <div class="card-header p-0 card-heading">
                    
                  </div>
                  <div class="card-body p-0">

                      <div class="form-group">
                      <form action="Stock_dispatch.php" method="post">
                        <label for="Stock_id"  class="input__label">Stock Id</label>
                        <input type="text" name="stockidtxbx"  class="form-control input-style" id="stkid" name="stkid"
                        pattern="[0-9]{4}" title="Please enter a 4-digit number"  aria-describedby="emailHelp" placeholder="stock id" onkeyup="GetDetail(this.value)" value="">
                      </div>

                      <button type="submit" class="btn btn-primary btn-style mt-4"> <i class="fa fa-search" style="font-size: 120%;"></i>Search</button> 
<br><br>


<?php
if(isset($_POST['stockidtxbx'])){
$rollno = $_POST['stockidtxbx']; 

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "store");

// Get the name from the database
$sql = "SELECT * FROM stocktable WHERE stkid = '$rollno'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Get the name from the result set
  $row = mysqli_fetch_assoc($result);
  $stock_name = $row['stkname'];
  $Available_Quantity = $row['stkquantity'];
} else {
   //echo '<script>alert("hello") </script>';
     echo '<script>document.getElementById("place").innerHTML = "this number is not avilable"</script>';
}
}

?> 
</form>
                  <form action="update2.php" method="get">

                      <div class="form-group">
                        <label for="Stock name" class="input__label">Stock name</label>
                        <input type="text" value="<?php if(isset($_POST['stockidtxbx'])){ if (mysqli_num_rows($result) > 0) { echo $stock_name; }}?>"class="form-control input-style" id="stkname" name="stkname"
                            aria-describedby="emailHelp" placeholder="stock name" >
                      </div>
                        
                      <div class="form-group d-inline-block">
                        <label for="quantity" class="input__label">Available Quantity</label>
                        <input type="text"  value="<?php if(isset($_POST['stockidtxbx'])){ if (mysqli_num_rows($result) > 0) { echo $Available_Quantity; }}?>"class="form-control input-style " id="stkavailableqty"
                            aria-describedby="emailHelp" placeholder="Available Quantity" >
                      </div>
                      <div class="form-group d-inline-block">
                        <label for="quantity" class="input__label">Required Quantity</label>
                        <input type="text" class="form-control input-style " 
                            aria-describedby="emailHelp" placeholder=" Required Quantity" name="Required_Quantity" >
                      </div>
                      

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text"  for="inputGroupSelect01">Department</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                          <option selected >Choose...</option>
                          <option value="Office">Office</option>
                          <option value="MBA">MBA</option>
                          <option value="H S">H S</option>
                          <option value="Hostel">Hostel</option>
                          <option value="Dip-CME">Dip-CME</option>
                          <option value="Dip-ECE">Dip-ECE</option>
                          <option value="Dip-EEE">Dip-EEE</option>
                          <option value="Dip-CIVIL">Dip-CIVIL</option>
                          <option value="Dip-MECH">Dip-MECH</option>
                          <option value="B.Tech-CSE AI">B.Tech-CSE AI</option>
                          <option value="B.Tech-CSE">B.Tech-CSE</option>
                          <option value="B.Tech-ECE">B.Tech-ECE</option>
                          <option value="B.Tech-EEE">B.Tech-EEE</option>
                          <option value="B.Tech-CIVIL">B.Tech-CIVIL</option>
                          <option value="B.Tech-MECH">B.Tech-MECH</option>
                     
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="Staff-Id" class="input__label">Staff-Id</label>
                        <input type="text" class="form-control input-style" id="staff id"
                            aria-describedby="emailHelp" placeholder="Staff-Id" >
                      </div>

                      <div class="form-group">
                        <label for="Staff Name" class="input__label">Staff Name</label>
                        <input type="text" class="form-control input-style" id="staffname"
                            aria-describedby="emailHelp" placeholder="Staff Name" >
                      </div>
                      <div>
                      <label for="Stock_id"  class="input__label">Stock Id</label>
                      <input type="text" value="<?php if(isset($_POST['stockidtxbx'])){ if (mysqli_num_rows($result) > 0) { echo  $rollno; }}?>"class="form-control input-style" id="stkname" name="stkid"
                            aria-describedby="emailHelp" placeholder="stock name" >
                      </div>

                    

                      <!--div class="form-check check-remember check-me-out">
                          <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1">
                          <label class="form-check-label checkmark" for="exampleCheck1">Check me out</label>
                      </div-->
                      <button type="submit" name="submit2" class="btn btn-primary btn-style mt-4">Submit</button>
                  </form>
                  </div>
                </div>
              </div>
              
              
            </div>
        </div>
      </div>
    </section>
</div>


<!--footer Section Started-->
<footer section start>
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>Location:</h6>
          <br>
          <p class="text-justify" text-align : center>
            SVR Engineering College <br>
            &nbsp&nbsp&nbsp&nbsp   Ayyaluru,Nandyal<br>
            &nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp     AP</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Mail Us:</h6>
          <br>
          <ul class="footer-links">
            <p><strong>Phone : 91 6302348787</strong>
            <li><a href="mailto:21438cm047@svrec.ac.in">21438cm047@svrec.ac.in</a></li>
             </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Opening Hours:</h6>
          <br>
          <ul class="footer-links">
            Working Hours : 8am-10pm<br>
            Sunday (closed)
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="https://www.facebook.com/SVREC.NDL"><i class="fa fa-facebook"></i></a></li>
            <li><a class="facebook" href="https://www.youtube.com/channel/UC7fczHCA-HT6BXdwJrU8M6A"><i class="fa fa-youtube"></i></a></li>
        </div>
      </div>
    </div>
</footer>
</footer>
<!--footer section end-->

<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-1.10.2.min.js"></script>

<!-- chart js -->
<script src="assets/js/Chart.min.js"></script>
<script src="assets/js/utils.js"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="assets/js/bar.js"></script>
<script src="assets/js/linechart.js"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/scripts.js"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="assets/js/modernizr.js"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>


</body>

</html>