<?php

$conn=mysqli_connect("localhost","koko","12345","blog");

if ($conn) {
//echo "Connected successfully";
}

else
{
    exit('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
} 



//     // mysqli_free_result($result);


?>
<!DOCTYPE html>
<!--
Template Name: Overerts
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Bublog! | Pages | Sidebar Left</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="../bs/css/bootstrap.min.css">
    <script type="text/javascript" src="../bs/js/jquery.min.js"></script>
    <script type="text/javascript" src="../bs/js/bootstrap.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<!--<link type="text/css" href="editor.css" rel="stylesheet"/> -->
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/background.jpg'); "> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1" >
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="../index.html">Bublog!</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
         <li ><a href="../index.html">About</a></li>
         <li><a href="full-width.php">Blogs</a></li>
          <!-- <li><a class="drop" href="#">Pages</a>
            <ul>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="#">Full Width</a></li>
              <li><a href="sidebar-left.html">Sidebar Left</a></li>
              <li><a href="sidebar-right.html">Sidebar Right</a></li>
              <li><a href="basic-grid.html">Basic Grid</a></li>
            </ul>
          </li> -->
          <li><a data-toggle="modal" data-target="#myModal2">Login</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
   
  </div>
  <!-- ################################################################################################ -->
  <!-- #############LOGIN CREDENTIALS ################################################################################### -->
<div id="myModal2" class="modal modal-transparent fade" role="dialog">
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div  class="modal-content" style=" background-color: #cc9a67; opacity: 0.8; filter: alpha(opacity=60);">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LOGIN</h4>
      </div>
      <div class="modal-body">
       <form action="../validate.php" method="POST">
                <div>
                  <span><label>Name</label></span>
                  <span><input type="text" class="textbox"  name="username"  style="width:400px; height:25px;" required></span>
                </div></br>
                
                <div>
                  <span><label>Password</label></span>
                  <span><input name="password" type="password" class="password" style="width:400px; height:25px;" required></span>
                </div></br>
               <div>
               
                  <span><input type="submit" name="submit" class="button" value="Submit"></span>
              </div></br>
              </form>
      </div>
    </div>

  </div>
</div>
<!-- ################################################################################################ -->

  <!-- ################################################################################################ -->

  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
     <?php 
      if($_GET){
        $name=$_GET['user'];
        echo '<h1>';
        echo $name;
        echo '</h1>';       
      }
    else{
      echo "Url has no user";
    }
    ?>
      <nav class="sdb_holder">
      <form method="POST" action="article.php">
        <ul>
          <li><button type="submit" class="btn-default" style="background-color:#A9BCF5; ">Publish</style></button></li> 
          </br>
          <!-- <li><button type="button" class="btn-default" style="background-color:#A9BCF5; ">View</style></button></li> -->
            <!-- <ul>
              <li><a href="#">Navigation - Level 2</a></li>
            </ul> -->
          </li>
        </ul>
        </form>
       <!--  <ul>
        <li><button type="button" class="btn-default" style="background-color:#A9BCF5; ">View</style></button></li>

        </ul> -->
      </nav>
     
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      
      
      <!-- ################################################################################################ -->
      <!--Text Area-->
      <h2>What's on your mind???...</h2>
      <form method="POST" action="article.php">
      <h5> Title </h5>
      <textarea rows="1"  cols="76" id="title" name="title"></textarea>
      <p><h5> Article </h5><textarea id="editor1" name="editor1"></textarea></p>
      <span><input type="submit" name="Publish" class="button" value="Publish"></span>
      </form>
    
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper quicklinks">

  <nav class="hoc clear"> 

     <h6 class="heading">Contact Us</h6>
      <ul class="nospace">

    <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
    <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
    <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>

  </nav>

</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script type="text/javascript">
  CKEDITOR.replace( 'editor1' );
</script>
<script type="text/javascript">
  window.onload = function()
  {
    CKEDITOR.replace( 'editor1' );
  };
</script>
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>

<!-- ################################################################################################ -->
</body>
</html>
