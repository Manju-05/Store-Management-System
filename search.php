<!doctype html>
<?php
if(isset($_POST['stockidtxbx'])){
 $rollno = $_POST['stockidtxbx'];
 echo "hell333o";
 }
 ?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

  <title>Store Management System</title>
  <link rel="icon" type="image/x-icon" href="assets/images/faviocn.png">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
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

<body class="sidebar-menu-collapsed">
<div class="se-pre-con"></div>
<section>
  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
      <h1><a href="index.html">SVREC</a></h1>
    </div>


    <div class="logo-icon text-center">
      <a href="index.html" title="logo"><img src="assets/images/logo.png" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li><a href="index.html"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
        </li>
        <li class="menu-list">
        <li><a href="stock_entry_reg.html"><i class="fa fa-archive"></i> <span>Stock Entry Register </span></a> </li>
        <li><a href="Stock_dispatch.php"><i class="fa fa-dropbox"></i> <span>Stock Dispatch Register</span></a></li>
        
        <li class="active"><a href="search.php"><i class="fa fa-search"></i> <span>Search</span></a></li>
        
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
                </a>
                <div class="logout">
                <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                  <li class="user-info">
                    <h5 class="user-name">SVREC</h5>
                    <span class="status ml-2">Store Management</span>
                  </li>
                  <li> <a href="http://www.svrec.ac.in"><i class="fa fa-user-circle-o"></i>Profile</a> </li>
                  
                  <li class="logout"> <a href="login.php"><i class="fa fa-power-off"></i> Logout</a> </li>
                </ul>
                </div>
                 </div>
    <!--notification menu end -->
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
        <li class="breadcrumb-item active" aria-current="page">Search_Page</li>
        <!--li class="breadcrumb-item"><a href="#"></a></li-->

      </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- //card heading -->

    <div class="card-body">

      <section class="w3l-pricing1">
        <div class="row px-2">
          <div class="col-md-12 px-2">
            <div class="mb-4 price-card price-card1 p-lg-4 p-md-3 p-4">
              <div class="card-header p-0 card-heading">
                
              </div>
              <form action="search.php" method="POST">
              <div class="form-group">
                <label for="Stock Id" class="input__label">Stock Id</label>
                <input type="text" class="form-control input-style" name="stockidtxbx" id="stkid" 
                pattern="[0-9]{4}" title="Please enter a 4-digit number" required aria-describedby="emailHelp" placeholder="Stock Id" required>
            </div>

            <button type="submit" class="btn btn-primary btn-style mt-4"> <i class="fa fa-search" style="font-size: 120%;"></i>Search</button> 
            <br>
            <br>

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
            <div class="form-group">
              <label for="Stock name" class="input__label">Stock name</label>
              <input type="text"placeholder="Stock Name" value="<?php if(isset($_POST['stockidtxbx'])){ if (mysqli_num_rows($result) > 0) { echo $stock_name; }}?>"class="form-control input-style" id="stkname" name="stkname">

            </div>
            <div class="form-group">
              <label for="quantity" class="input__label">Available quantity</label>
              <input type="text"  value="<?php if(isset($_POST['stockidtxbx'])){ if (mysqli_num_rows($result) > 0) { echo $Available_Quantity; }}?>"class="form-control input-style " id="stkavailableqty"
                            aria-describedby="emailHelp" placeholder="Available Quantity" >
                      </div>
           
           </div>
</form>
  <!-- //content-- >

</div>
< main content end-->
</section>

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